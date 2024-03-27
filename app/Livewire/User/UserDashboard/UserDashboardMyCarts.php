<?php

namespace App\Livewire\User\UserDashboard;

use Cart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardMyCarts extends Component
{
    use WithPagination ;
    public $user  ;
    protected $carts ;

    public function mount()
    {

    }

    public function render()
    {
        $this->carts = Cart::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate(10);

        return view('livewire.user.user-dashboard.user-dashboard-my-carts' , [
            'carts'=> $this->carts ,
        ]);
    }
}
