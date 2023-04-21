<?php

namespace App\Http\Livewire\Admin\Emp;

use App\Models\User;
use Employee\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddEmployee extends Component
{
    public $name , $family , $cell , $phone , $address , $email , $password ,$company_id,$role , $levelPermission = 1;
    public function render()
    {
        if (is_api_access (Auth::user()->type_user)){
            $companies = User::query()->where('type_user' , 'Company')->get();
            return view('livewire.admin.emp.add-employee' , compact('companies'));
        }else {
            return view('livewire.admin.emp.add-employee' );
        }


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
//dd($this->name);
        $newEmployee = new Employee();
        $newEmployee->name = $this->name ;
        $newEmployee->family = $this->family ;
        $newEmployee->cell = $this->cell ;
        $newEmployee->address = $this->address ;
        $newEmployee->email = $this->email ;
        $newEmployee->password = bcrypt($this->password) ;
        $newEmployee->role = $this->role ;
        $newEmployee->levelPermission = $this->levelPermission ;
        if (is_api_access (Auth::user()->type_user)){
            $newEmployee->company_id = $this->company_id ;
            $newEmployee->type_user = 'UserCompany' ;
        }
        $newEmployee->save();
        $this->reset();
        $this->emit('updateEmployees');
    }
}
