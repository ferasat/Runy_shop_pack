<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Cart;
use Cart\Models\CartBankPaymentGateway;
use Cart\Models\Invoice;
use Cart\Models\Order;
use Cart\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Omalizadeh\MultiPayment\Facades\PaymentGateway;
use SiteLogs\Models\SiteLogs;

class InvoiceController extends Controller
{
    public function pay(Invoice $id)
    {

        if ($id->status == '2') {
            return redirect(route('pay.payed') . '/?transaction_id=' . $id->transaction_id);
        } elseif ($id->status == '0') {
            return 'فاکتور منقضی شده است';
        }
        $runy_invoice = $id;
        $runy_invoice_id = $id->id;

        $invoice = new \Omalizadeh\MultiPayment\Invoice($id->amount);
        $runy_invoice->invoice_number = $invoice->getInvoiceId();
        $runy_invoice->description = $invoice->getUuid();
        $runy_invoice->save();
        $invoice->setPhoneNumber($runy_invoice->cell);
        // dd($invoice , $runy_invoice);
        $transactionId = PaymentGateway::purchase($invoice, function (string $transactionId) {
            //dd($transactionId);
            $newTransaction = new Transaction();
            $newTransaction->payment_id = $transactionId;
            $newTransaction->transaction_id = $transactionId;
            $newTransaction->user_id = Auth::id();
            //$newTransaction->invoice_id = $runy_invoice->id;
            $newTransaction->uuid = $transactionId;
            //$newTransaction->paid = $runy_invoice->amount;
            $newTransaction->save();

            $newLog = new SiteLogs();
            $newLog->new_Log('ساخت تراکنش', 'ساخت تراکنش به آیدی:' . $newTransaction->id, 'transaction', $newTransaction->id, 'ایجاد');
        }
        );

        //dd($transactionId);

        return $transactionId->view();

    }

    public function callback_url(Request $request)
    {
        $getWay = CartBankPaymentGateway::query()->where('set_default', 1)->first();
        //dd($request->all(), json_encode($request->all()), $request->id, $request->status , $getWay);


        if ($getWay->name == 'idpay') {
            $transaction = Transaction::query()->where('transaction_id', $request->id)->first();
            $invoice = Invoice::query()->where('invoice_number', $request->order_id)->first();
            $cart = Cart::query()->find($invoice->cart_id);

            $transaction->transaction_note = idpayStatus($request->status);
            $transaction->invoice_id = $request->order_id;
            $transaction->amount = $request->amount;
            $transaction->card_no = $request->card_no;
            $transaction->transaction_note = json_encode($request->all());
            if ($request->status == 10) {
                $transaction->status = 2;
                $invoice->status = 'پرداخت شده';
                $cart->status = 'پرداخت موفق';
            } else {
                $transaction->status = 0;
                $invoice->status = 'ناموفق';
                $cart->status = 'پرداخت ناموفق';
            }
            $transaction->save();

            $invoice->transaction_id = $transaction->id;
            $invoice->save();

            $cart->save();
            $orders = Order::query()->where('cart_id' , $cart->id )->get();

        }

        return view('CartView::user.successFullPay' , compact('cart' , 'invoice', 'orders'));

    }
}
