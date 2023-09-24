<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user ;
    public $name , $family , $cell , $address , $email , $password , $role, $levelPermission ;

    public function mount()
    {
        //dd($this->user->name);
        $this->name = $this->user->name;
        $this->family = $this->user->family;
        $this->cell = $this->user->cell;
        $this->address = $this->user->address;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
        $this->levelPermission = $this->user->levelPermission;
    }

    public function render()
    {
        //dd($this->user);
        return view('livewire.admin.user.edit-user');
    }

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
    ];
    protected $rulesPass = [
        'password' => 'min:8'
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'family.required' => 'نام لازم هست',
        'password.min' => 'حداقل 8 کارکتر باشد',
    ];

    public function updated()
    {
        //dd(strlen($this->password));
        if ( strlen($this->password) > 0 and strlen($this->password) < 8){
            $this->validate($this->rulesPass);
        }
    }

    public function save()
    {
        $this->validate();

        $up_user = User::query()->find($this->user->id);
        $up_user->name = $this->name ;
        $up_user->family = $this->family ;
        $up_user->cell = $this->cell ;
        $up_user->address = $this->address ;
        $up_user->email = $this->email ;
        if (count_chars($this->password) > 7){
            $up_user->password = bcrypt($this->password) ;
        }
        $up_user->role = $this->role ;
        $up_user->levelPermission = $this->levelPermission ;
        $up_user->save();
        $this->dispatch('status_list');

    }

    public function call_list_emp()
    {
        $this->dispatch('status_list');
    }
}
