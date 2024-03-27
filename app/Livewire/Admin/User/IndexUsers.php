<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;

    public $status , $user_edit;

    protected $users;

    public function mount()
    {
        $this->users = User::query()->orderByDesc('id')->paginate(20);
        $this->status ='index' ;
    }

    public function render()
    {
        return view('livewire.admin.user.index-users', [
            'users' => $this->users,
        ]);
    }

    public function changeStatus($user_id)
    {
        $user = User::query()->find($user_id);
        if ($user->status == 'active')
            $user->status = 'disabled';
        else $user->status = 'active';
        $user->save();
        $this->users = User::query()->orderByDesc('id')->paginate(20);
        $this->render();

    }

    public function deleteUser($user_id)
    {
        User::query()->find($user_id)->delete();
        $this->mount();
        $this->render() ;
    }

    public function editUser($user_id)
    {
        $this->user_edit = User::query()->find($user_id);
        $this->status = 'edit';
        //dd($user_id);
    }
}
