<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Invoice;
use Cart\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Payment\Facade\Payment;

class InvoiceController extends Controller
{
    public function pay(Invoice $id)
    {
        if ($id->status == '2') {
            return redirect(route('pay.payed') . '/?transaction_id=' . $id->transaction_id);
        } elseif ($id->status == '0') {
            return 'فاکتور منقضی شده است';
        }

        if ($id->contract_rules == 1) {
            try {
                $invoice = new \Shetabit\Multipay\Invoice();
                $invoice->amount(intval(($id->amount / 10)));

                $paymentId = md5(uniqid());

                /// تراکنش را در دیتابیس می سازیم
                $newTransaction = new Transaction();
                $newTransaction->payment_id = $paymentId;
                $newTransaction->user_id = Auth::id();
                $newTransaction->invoice_id = $id->id;
                $newTransaction->uuid = $invoice->getUuid();
                $newTransaction->paid = $invoice->getAmount();
                $newTransaction->invoice_details = $invoice;
                $newTransaction->save();

                /// لینک برگشت را ست می کند
                $pay = Payment::callbackUrl(route('pay.result') . '?id=' . $id->id . '&&paymentId=' . $paymentId);
                // توضیحات پرداخت را ست می کند
                $pay->config('description', $id->subject);

                /// متود purchase درخواست برای درگاه ارسال م کنه تا ای دی تراکنش تولید شود
                $pay->purchase($invoice, function ($driver, $transactionId) use ($newTransaction) {
                    $newTransaction->transaction_id = $transactionId;
                    $newTransaction->save();
                });

                return $pay->pay()->render();

            } catch (PurchaseFailedException | Exception | SoapFault $e) {
                $newTransaction->transaction_result = $e;
                $newTransaction->status = 0;
                $newTransaction->save();

                $newLogs = new SiteLogs();
                $newLogs->log_name = 'pay_fail';
                $newLogs->description = 'تراکنش مشکل برخورد شماره تراکنش : '.$newTransaction->id . ' - '.$e;
                $newLogs->type = 'transaction';
                $newLogs->type_id = $newTransaction->id;
                $newLogs->event = 'تراکنش ناموفق';
                $newLogs->save();

                log::alert('تراکنش مشکل برخورد شماره تراکنش : '.$newTransaction->id);

                return redirect(route('pay.fail') . '/?transaction_id=' . $newTransaction->id);
            }
        } else {
            return 'اجازه پرداخت ندارید لطفا با کانتر فروش تماس بگیرید';
        }
    }

    public function result(Request $request)
    {
        if (!isset($_REQUEST['paymentId']) or $_REQUEST['paymentId'] == null) {
            return redirect(route('pay.fail') . '/?error=paymentId');
        }

        $paymentId = $_REQUEST['paymentId'];
        $transaction = Transaction::where('payment_id', $paymentId)->first();
        if (empty($transaction)) {
            /// اگر خالی  بود
            return redirect(route('pay.fail') . '/?error=empty');
        }

        /*        if ($transaction->user_id <> Auth::id()) {
                    /// کاربر لاگین با کاربری که صاحب صوت حساب فرق دارد
                    return redirect(route('pay.fail') . '/?error=user_id');
                }*/

        if ($transaction->status <> Transaction::STATUS_PENDING) {
            /// وضعیت پرداخت : در حال پرداخت هست
            return redirect(route('pay.fail') . '/?error=status');
        }

        $invo = Invoice::findOrFail($_REQUEST['id']);

        try {
            $paid = intval($transaction->paid);
            $transactionId = intval($transaction->transaction_id);

            $receipt = Payment::amount($paid)
                ->transactionId($transactionId)
                ->verify();  /// در اینجا درخواستی به درگاه پرداخت برای گرفتن اطلاعات پرداختی زده میشه

            echo $receipt->getReferenceId();
            log::info('receipt :'.$receipt->getReferenceId());

            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();


            return redirect(route('pay.success') . '/?transaction_id=' . $transaction->id);

        } catch (Exception | InvalidPaymentException $e) {
            $transaction->status = Transaction::STATUS_FAILED;
            $transaction->transaction_result = serialize([
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ]);

            $transaction->save();

            return redirect(route('pay.fail') . '/?transaction_id=' . $transaction->id);
        }


    }
}
