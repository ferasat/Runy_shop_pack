<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;

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
            'email' => 'required|min:3',
            'password' => 'required|min:3',
            'cellPhone' => 'required|min:3|max:12',
        ]);

        if ($validated){
            $newUser = new User();
            $newUser->name = $this->name ;
            $newUser->family = $this->family ;
            $newUser->email = $this->email ;
            $newUser->password = bcrypt($this->password) ;
            $newUser->cellPhone = $this->cellPhone ;
            $newUser->save() ;

            return $this->redirect(asset('/home'));
        }

    }
}
