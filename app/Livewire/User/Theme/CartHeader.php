<?php

namespace App\Livewire\User\Theme;

use Livewire\Component;

class CartHeader extends Component
{
    protected $listeners = ['rendercart' => '$refresh'];

    public $totalQuantity=0;
    public function render()
    {
        $total2 = 0;

        $cart2 = session()->get('cart', []);

        if ($cart2) {
            foreach ($cart2 as $item) {
                $total2 += $item['quantity'];
            }
        }
        $this->totalQuantity=$total2;

        return view('livewire.user.theme.cart-header');
    }
//    #[On('rendercart')]
//    public function ab()
//    {
//        $total2 = 0;
//
//        $cart2 = session()->get('cart', []);
//
//        if ($cart2) {
//            foreach ($cart2 as $item) {
//                $total2 += $item['quantity'];
//            }
//        }
//        $this->totalQuantity=$total2;
//    }

}
