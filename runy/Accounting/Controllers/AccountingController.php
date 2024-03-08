<?php

namespace RunyAccounting\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;
use RunyAccounting\Models\Accounting;

class AccountingController extends Controller
{

    public function index()
    {
        return view('AccountingView::indexAccounting');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Accounting $accounting)
    {
        //
    }


    public function edit(Accounting $accounting)
    {
        //
    }


    public function update(Request $request, Accounting $accounting)
    {
        //
    }


    public function destroy(Accounting $accounting)
    {
        //
    }
    public function official_bills()
    {
        $reserve_id=$_REQUEST['re_id'];
        $reserve=Reservations::query()->find($reserve_id);
        return view('AccountingView::showOfficialBills', compact('reserve'));
    }
}
