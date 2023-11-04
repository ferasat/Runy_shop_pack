<?php

namespace App\Livewire\Admin\Customer;

use App\Models\User;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCustomer extends Component
{
    public $name , $family , $cell , $phone , $address , $email , $type='مشتری' , $users , $customer_user_id ;

    public function mount()
    {
        $this->users =User::query()->where('levelUser', 'شرکت')->orWhere('levelUser', 'مشتری')->get();
    }

    public function render()
    {
        //dd($this->users);
        return view('livewire.admin.customer.add-customer');
    }

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'family.required' => 'نام لازم هست',
    ];

    public function save()
    {
        $this->validate();
        $rand_pass = rand(10050201 , 99999999) ;

        if ($this->customer_user_id == 'create'){
            $newUser = new User();
            $newUser->name = $this->name ;
            $newUser->family = $this->family ;
            $newUser->cellPhone = $this->cell ;
            $newUser->email = $this->email ;
            $newUser->password = bcrypt($rand_pass) ;
            $newUser->save() ;

            $this->customer_user_id = $newUser->id ;
        }

        $newCustomer = new Customer();
        $newCustomer->name = $this->name ;
        $newCustomer->family = $this->family ;
        $newCustomer->customer_user_id = $this->customer_user_id ;
        $newCustomer->type = $this->type ;
        $newCustomer->save();

        if ( strlen($this->cell) > 2 and strlen($this->email) < 5){
            $this->email = $this->cell.'@'.setting_site()->site_url ;
        }elseif (strlen($this->email) >= 5) {

        }else {
            $this->email = 'u'.$newCustomer->id.rand(1,999).'@'.setting_site()->site_url ;
        }

        $newCustomer->cell = $this->cell ;
        $newCustomer->cellphone = $this->phone ;
        $newCustomer->address = $this->address ;
        $newCustomer->email = $this->email ;
        $newCustomer->save();

        $newLog = new CustomerLog();
        $newLog->customer_id = $newCustomer->id ;
        $newLog->full_name = $newCustomer->name.' '.$newCustomer->family ;
        $newLog->department = 'باشگاه مشتریان' ;
        $newLog->log_subject = 'افزودن مشتری ' .$newLog->full_name;
        $newLog->note = 'اطلاعات مشتری توسط '.fullName(Auth::id()).' بارگزاری شد.' ;
        $newLog->save();

        $this->reset();
        $this->dispatch('updateCustomers');
    }
}
