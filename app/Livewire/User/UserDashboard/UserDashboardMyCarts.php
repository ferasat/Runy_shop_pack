<?php

namespace App\Livewire\User\UserDashboard;

use Cart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use RunyAccounting\Models\AccSetting;

class UserDashboardMyCarts extends Component
{
    use WithPagination ;
    public $user ;
    protected $carts , $default_currency;

    public function mount()
    {
        $this->default_currency = AccSetting::query()->first()->default_currency ;
    }

    public function render()
    {
        $this->carts = Cart::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate(10);

        return view('livewire.user.user-dashboard.user-dashboard-my-carts' , [
            'carts'=> $this->carts ,
            'default_currency'=> $this->default_currency ,
        ]);
    }
}
