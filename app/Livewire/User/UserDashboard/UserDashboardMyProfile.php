<?php

namespace App\Livewire\User\UserDashboard;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class UserDashboardMyProfile extends Component
{
    use WithFileUploads;

    public $user , $showMsg;
    public $name , $family , $password , $cellPhone , $email , $address , $company_id , $username , $company_name ;
    public $about , $codeMeli , $zip_code , $gender , $birthDate , $status , $levelUser , $levelPermission , $role , $pic_pr , $password_accept ;

    #[Validate('image|max:1024')]
    public $pic ;
    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name ;
        $this->family = $this->user->family ;
        $this->cellPhone = $this->user->cellPhone ;
        $this->email = $this->user->email ;
        $this->username = $this->user->username ;
        $this->company_id = $this->user->company_id ;
        $this->company_name = $this->user->company_name ;

        $this->pic = $this->user->pic ;
        $this->codeMeli = $this->user->codeMeli ;
        $this->about = $this->user->about ;
        $this->address = $this->user->address ;
        $this->zip_code = $this->user->zip_code ;
        $this->gender = $this->user->gender ;
        $this->birthDate = $this->user->birthDate ;
        $this->status = $this->user->status ;
        $this->levelUser = $this->user->levelUser ;
        $this->levelPermission = $this->user->levelPermission ;
        $this->role = $this->user->role ;

        $this->showMsg = '';
    }
    public function render()
    {
        return view('livewire.user.user-dashboard.user-dashboard-my-profile');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:3|max:70',
            'family' => 'required|min:3',
        ]);

        if (strlen($this->email) > 3){
            $email = $this->email ;
        }else{
            $email = $this->cellPhone.'@ms.ir';
        }

        if ($validated){
            $user = User::query()->find(Auth::id());
            $user->name = $this->name ;
            $user->family = $this->family ;
            $user->email = $email ;
            if ($this->pic_pr){
                $user->pic = 'storage/'.$this->pic_pr->store('uploads/profile' , 'public');
            }
            $user->address = $this->address ;
            $user->zip_code = $this->zip_code ;
            $user->save() ;

            $this->user = $user;

            $this->mount();
            $this->render();

            $this->showMsg = 'تغییر اطلاعات  ذخیره شد';
        }
    }

    public function changePass()
    {
        if ($this->password === $this->password_accept){
            $this->user->password = bcrypt($this->password) ;
            $this->user->save() ;
            $this->showMsg = 'رمز عبور تغییر کرد';
            $this->render();
        }
    }
}
