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
        $invoice = new \Omalizadeh\MultiPayment\Invoice($id->amount);
        $invoice_getUuid = $invoice->getUuid();

        $runy_invoice = Invoice::query()->find($id->id);

        if ($runy_invoice->active == 'inactive'){
            $message = [
                'title'=>'این صورت حساب غیر فعال است',
                'description'=>'این صورت حساب  در وضعیت غیر فعال است و نمی تونید صورت حساب را پرداخت کنید . لطفا با پشتیبان تماس بگیرید .',
                'status' => 'info'
            ];
            return view('messages.user-show-messages' , compact('message'));
        }

        $newTransaction = new Transaction();
        $newTransaction->uuid = $invoice_getUuid;
        $newTransaction->invoice_id = $runy_invoice->id;
        $newTransaction->save();

        if ($runy_invoice->transaction_id == null){
            $runy_invoice->transaction_id = $newTransaction->id;
        }else {
            $runy_invoice->transaction_id = $runy_invoice->transaction_id .'|'.  $newTransaction->id;
        }
        $runy_invoice->save();

        $invoice->setPhoneNumber($runy_invoice->cell);

        $transactionId = PaymentGateway::purchase($invoice, function (string $transactionId ) use ($newTransaction) {
            $nTransaction = Transaction::query()->find( $newTransaction->id);
            $nTransaction->payment_id = $transactionId;
            $nTransaction->transaction_id = $transactionId;
            $nTransaction->user_id = Auth::id();
            $nTransaction->save();
            $newLog = new SiteLogs();
            $newLog->new_Log('ساخت تراکنش', json_encode($nTransaction), 'transaction', $nTransaction->id, 'ایجاد' , 'json');
        }) ;

        return $transactionId->view();

    }

    public function callback_url(Request $request)
    {
        $getWay = CartBankPaymentGateway::query()->where('set_default', 1)->first();
        $newLog = new SiteLogs();
        $newLog->new_Log('نتیجه درگاه', json_encode($request->all()), 'transaction', $request->id, $request->status, 'json');
        //dd($request->all(), json_encode($request->all()), $request->id, $request->status , $getWay);


        if ($getWay->name == 'idpay') {
            $transaction = Transaction::query()->where('transaction_id', $request->id)->first();
            $invoice = Invoice::query()->find( $transaction->invoice_id);
            $cart = Cart::query()->find($invoice->cart_id);

            $transaction->status =  $request->status;
            $transaction->amount = $request->amount;
            $transaction->card_no = $request->card_no;
            $transaction->get_way = $getWay->name ;
            $transaction->transaction_note = json_encode($request->all());
            if ($request->status == 10) {
                $transaction->status = $request->status;
                $invoice->status = 'پرداخت موفق';
                $invoice->subject = 'پرداخت موفق برای '.$invoice->owner;
                $invoice->active = 'inactive';
                $cart->status = 'ثبت سفارش';
                $cart->acc_status = 'پرداخت موفق';

            } else {
                $transaction->status = $request->status;
                $invoice->status = 'پرداخت نشد';
                $invoice->subject = 'پرداخت نشده برای '.$invoice->owner;
                $cart->status = 'پرداخت نشد';
                $cart->acc_status = 'پرداخت نشد';
            }
            $transaction->save();

            $invoice->save();

            $cart->save();
            $orders = Order::query()->where('cart_id', $cart->id)->get();

            result_pay_on_product($cart->acc_status  , $orders); /// نتیجه پرداخت بروی موجودی محصول و انبار

            $newLog = new SiteLogs();
            $newLog->new_Log('نتیجه خرید : ' . $invoice->status, json_encode($cart), 'cart', $cart->id, $invoice->status, 'json', Auth::id());

        }

        return view('CartView::user.successFullPay', compact('cart', 'invoice', 'orders'));

    }
}
