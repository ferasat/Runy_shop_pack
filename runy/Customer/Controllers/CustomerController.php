<?php

namespace Customer\Controllers;

use App\Http\Controllers\Controller;
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
        $html_tag_data = ["override" => '{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'مشتریان';
        $description = 'مدیریت مشتریان';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/customer" => " مدیریت مشتریان  "];

        return view('CustomerView::indexCustomers', compact( 'html_tag_data', 'title', 'description', 'breadcrumbs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Customer $customer)
    {
        //
    }


    public function edit(Customer $customer)
    {
        //
    }


    public function update(Request $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $id)
    {
        return Customer::query()->findOrFail($id->id)->delete();
    }
}
