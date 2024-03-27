<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name , $family , $password , $cellPhone , $email ;
    public function render()
    {
        return view('livewire.user.auth.register');
    }

    public function save(){

        $validated = $this->validate([
            'name' => 'required|min:3|max:70',
            'family' => 'required|min:3',
            'password' => 'required|min:3',
            'cellPhone' => 'required|min:3|max:12',
        ]);

        if (strlen($this->email) > 3){
            $email = $this->email ;
        }else{
            $email = $this->cellPhone.'@ms.ir';
        }

        if ($validated){
            $newUser = new User();
            $newUser->name = $this->name ;
            $newUser->family = $this->family ;
            $newUser->email = $email ;
            $newUser->password = bcrypt($this->password) ;
            $newUser->cellPhone = $this->cellPhone ;
            $newUser->status = 'disabled' ;
            $newUser->save() ;

            Auth::loginUsingId($newUser->id);

            event(new Registered($newUser));

            return $this->redirect(asset(route('customer.dashboard')));
        }

    }
}
