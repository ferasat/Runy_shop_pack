<?php

namespace Cart\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory;
    use Notifiable;

    public function newOrder($cart_id , $session_id=null , $product_id=null , $product_name=null , $product_format=null ,
                             $product_price=null , $product_ps_price=null , $capacity=null , $quantity=null , $sum=null , $benefit=null )
    {
        $enwOrder = new Order();
        $enwOrder->cart_id = $cart_id ;
        $enwOrder->session_id = $session_id ;
        $enwOrder->product_id = $product_id ;
        $enwOrder->product_name = $product_name ;
        $enwOrder->product_format = $product_format ;
        $enwOrder->product_price = $product_price ;
        $enwOrder->product_ps_price = $product_ps_price ;
        $enwOrder->capacity = $capacity ;
        $enwOrder->quantity = $quantity ;
        $enwOrder->sum = $sum ;
        $enwOrder->benefit = $benefit ;
        $enwOrder->save();
    }
}
