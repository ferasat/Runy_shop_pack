<?php

namespace App\Livewire\Admin\Customer;

use App\Models\User;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexCustomer extends Component
{
    public $show ;
    protected $listeners =[
        'updateCustomers' => 'render',
    ];
    public function render()
    {
        $customers = Customer::query()->orderBy('id' , 'desc')->paginate(30);
        return view('livewire.admin.customer.index-customer' , compact('customers'));
    }

    public function syncUsers()
    {
        $users = User::all();
        $customers = Customer::all();
        $usersId = [];
        $customersUserId = [];

        foreach ($customers as $customer){
            if ($customer->customer_user_id != null){
                $customersUserId[]=$customer->customer_user_id ;
            }
        }

        foreach ($users as $user){
            if (in_array($user->id , $customersUserId , true)){
                $usersId[]=$user->id ;
            }else{
                if ($user->levelPermission < 3){

                    $newCustomer = new Customer();
                    $newCustomer->name = $user->name;
                    if ($user->family == null){
                        $newCustomer->family = $user->name;
                    }else{
                        $newCustomer->family = $user->family;
                    }
                    $newCustomer->customer_user_id = $user->id ;
                    $newCustomer->cell = $user->cellPhone ;
                    $newCustomer->pic = $user->pic ;
                    $newCustomer->email = $user->email ;
                    $newCustomer->save() ;

                    $newCustomerLog = new CustomerLog();
                    $newCustomerLog->customer_id = $newCustomer->id;
                    $newCustomerLog->full_name = $newCustomer->name.' '.$newCustomer->family;
                    $newCustomerLog->department = 'باشگاه مشتریان';
                    $newCustomerLog->log_subject = 'اضافه کردن مشتری';
                    $newCustomerLog->note = 'کاربر '.fullName(Auth::id()).' مشتری به نام '.$newCustomer->name.' '.$newCustomer->family .' را اضافه کرد';
                    $newCustomerLog->save();

                    $usersId[]=$newCustomer->id ;

                }
            }

        }

        dd('Okey');

    }

}
