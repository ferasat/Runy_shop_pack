<?php

namespace App\Livewire\Admin\Cart\ManualSale;

use Cart\Models\Order;
use Livewire\Component;

class ManualSaleOrder extends Component
{
    public $order , $x , $quantity , $product_price , $sum;

    public function mount()
    {
        $this->quantity = $this->order->quantity;
        $this->product_price = $this->order->product_price;
    }
    public function render()
    {
        return view('livewire.admin.cart.manual-sale.manual-sale-order');
    }

    public function updated()
    {
        $this->sum = $this->quantity * $this->product_price ;
        Order::query()->find($this->order->id)->update([
            'sum'=>$this->sum,
            'product_price'=>$this->product_price,
            'quantity'=>$this->quantity,
        ]);

        $this->dispatch('update-manual-cart');
    }

    public function deleteOrder($order_id)
    {
        Order::query()->find($order_id)->delete();
        $this->dispatch('update-manual-cart');
        $this->render();
    }
}
