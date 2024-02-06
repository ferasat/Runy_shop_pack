<?php

namespace App\Livewire\User\UserDashboard;

use Cart\Models\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardMyCarts extends Component
{
    use WithPagination ;
    public $user  ;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.user.user-dashboard.user-dashboard-my-carts' , [
            'carts'=> Cart::query()->where('user_id' , $this->user->id)->orderByDesc('id')->paginate(10)
        ]);
    }
}
