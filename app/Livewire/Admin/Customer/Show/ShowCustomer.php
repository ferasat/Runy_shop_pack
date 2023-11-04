<?php

namespace App\Livewire\Admin\Customer\Show;

use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCustomer extends Component
{
    use WithPagination ;
    public $customer , $name , $family , $editStatus=false , $address , $cell , $email , $type , $company , $customer_user_id;

    public function mount()
    {
        $this->name = $this->customer->name ;
        $this->family = $this->customer->family ;
        $this->address = $this->customer->address ;
        $this->cell = $this->customer->cell ;
        $this->email = $this->customer->email ;
        $this->type = $this->customer->type ;
        $this->company = $this->customer->company ;
        $this->customer_user_id = $this->customer->customer_user_id ;
    }
    public function render()
    {
        $customerLogs = CustomerLog::query()->where('customer_id' , $this->customer->id)->paginate(5);
        return view('livewire.admin.customer.show.show-customer' , ['customerLogs'=>$customerLogs]);
    }

    public function editOn()
    {
        $this->editStatus = !$this->editStatus ;
    }

    public function saveInfo()
    {
        $this->customer->name = $this->name ;
        $this->customer->family = $this->family ;
        $this->customer->company = $this->company ;
        $this->customer->address = $this->address ;
        $this->customer->cell = $this->cell ;
        $this->customer->email = $this->email ;
        $this->customer->type = $this->type ;
        $this->customer->customer_user_id = $this->customer_user_id ;
        $this->customer->save() ;

        $newLog = new CustomerLog();
        $newLog->customer_id = $this->customer->id ;
        $newLog->full_name = $this->customer->name.' '.$this->customer->family ;
        $newLog->department = 'باشگاه مشتریان' ;
        $newLog->log_subject = 'ویرایش اطلاعات کاربر' ;
        $newLog->note = 'اطلاعات کاربر توسط '.fullName(Auth::id()).' ویرایش شد.' ;
        $newLog->save();

        $this->editStatus = !$this->editStatus ;
    }
}
