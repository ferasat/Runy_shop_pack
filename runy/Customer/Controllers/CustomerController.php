<?php

namespace Customer\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Customer\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'مشتریان';
        $description = 'مدیریت مشتریان';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/customer" => " مدیریت مشتریان  "];

        return view('CustomerView::indexCustomers', compact( 'title', 'description', 'breadcrumbs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Customer $id)
    {
        $customer = $id ;
        $title = 'دیدن :'.$id->name.' '.$id->family ;
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/customer" => " مدیریت مشتریان  ", "/dashboard/customer/edit/".$id->id => "ویرایش مشتری"];
        return view('CustomerView::showCustomer', compact( 'title',  'breadcrumbs' , 'customer'));
    }


    public function edit(Customer $id)
    {
        //dd($id);
        $title = 'ویرایش :'.$id->name.' '.$id->family ;
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/customer" => " مدیریت مشتریان  ", "/dashboard/customer/edit/".$id->id => "ویرایش مشتری"];
        return view('CustomerView::editCustomer', compact( 'title',  'breadcrumbs'));
    }


    public function update(Request $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $id)
    {
        return Customer::query()->findOrFail($id->id)->delete();
    }

    public function dashboard()
    {
        return view('CustomerView::dashboard.dashboardCustomer');
    }
}
