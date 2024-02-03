<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Invoice;
use Cart\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Payment\Facade\Payment;
use Omalizadeh\MultiPayment\Facades\PaymentGateway;
use SiteLogs\Models\SiteLogs;

class InvoiceController extends Controller
{
    public function pay(Invoice $id)
    {
        Log::info(' مسیر pay صدا زده شد');
        if ($id->status == '2') {
            return redirect(route('pay.payed') . '/?transaction_id=' . $id->transaction_id);
        } elseif ($id->status == '0') {
            return 'فاکتور منقضی شده است';
        }
        $runy_invoice = $id;

        $invoice = new \Omalizadeh\MultiPayment\Invoice($id->amount);
        //dd($invoice);
        $id->description = $invoice->getInvoiceId();
        $id->save();
        $invoice->setPhoneNumber($id->cell);

        return PaymentGateway::purchase($invoice, function (string $transactionId)
            {
                //dd($transactionId);
                $newTransaction = new Transaction();
                $newTransaction->payment_id = $transactionId;
                $newTransaction->transaction_id = $transactionId;
                $newTransaction->user_id = Auth::id();
                //$newTransaction->invoice_id = $runy_invoice->id;
                $newTransaction->uuid = $transactionId;
                //$newTransaction->paid = $runy_invoice->amount;
                $newTransaction->save();
            }
        )->view();

    }

    public function callback_url(Request $request)
    {
        dd($request->all());
        $transaction = Transaction::query()->where('transaction_id', $request->id)->first();
        $transaction->status = $transaction->status;
    }
}
