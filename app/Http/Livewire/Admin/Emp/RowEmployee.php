<?php

namespace App\Http\Livewire\Admin\Emp;

use App\Models\User;
use Livewire\Component;

class RowEmployee extends Component
{
    public $employee , $showMessage=false , $message_result ;
    public function render()
    {
        return view('livewire.admin.emp.row-employee');
    }

    public function delete($user_id)
    {
        $user = User::query()->find($user_id);
        if ($user->levelPermission > 2){
            $this->showMessage= true ;
            $this->message_result = 'شما دسترسی حذف این کار بر را ندارید';
        }else {
            $user->delete();
            $this->showMessage= true ;
            $this->message_result = 'خذف شد . می تونید ریفلیش کنید .';
        }
    }

    public function call_edit_user($employee)
    {
        $this->emit('status_edit' , $employee);
    }
}
