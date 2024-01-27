<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $allTransactions = Transaction::query()->orderByDesc('id')->paginate(20);
        return view('CartView::admin.transactions.indexTransactions' , compact('allTransactions'));
    }
}
