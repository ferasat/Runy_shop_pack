<?php

namespace App\Livewire\User\Theme;

use Livewire\Component;

class UserNavbarResponsive extends Component
{
    public $totalQuantity = 0;


    public function mount()
    {
        $total = 0;

        $cart = session()->get('cart', []);

        if ($cart) {
            foreach ($cart as $item) {
                $total += $item['quantity'];
            }
        }
        $this->totalQuantity=$total;


    }
    public function render()
    {
        return view('livewire.user.theme.user-navbar-responsive');
    }
}
