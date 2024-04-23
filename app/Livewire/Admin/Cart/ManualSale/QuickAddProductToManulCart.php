<?php

namespace App\Livewire\Admin\Cart\ManualSale;

use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\Product;

class QuickAddProductToManulCart extends Component
{
    public $cart , $orders , $product , $products , $wordSearch , $addNewProductView = false  , $searchInSerial=false , $new_product_name;

    public function mount()
    {
        $this->products = [];
    }

    public function render()
    {
        return view('livewire.admin.cart.manual-sale.quick-add-product-to-manul-cart' , [
            'products' => $this->products
        ] );
    }

    public function add_to_cart($product_id)
    {
        $product = Product::query()->find($product_id);
        $this->orders = Order::query()->where('cart_id' , $product->id)->get();

        if (count($this->orders) != 0) {

            $check_order = Order::query()->where([
                'product_id' => $product->id,
                'cart_id' => $product->id
            ])->first();

            if ($check_order != null ) {
                $check_order->quantity = $check_order->quantity + 1;
                $check_order->save();
            } else {
                $newOrder = new Order();
                $newOrder->cart_id = $this->cart->id;
                $newOrder->quantity = 1;
                $newOrder->product_id = $product_id;
                $newOrder->product_name = $product->name;
                $newOrder->product_format = $product->formatProduct ;
                $newOrder->product_price = $product->price;
                $newOrder->product_ps_price = $product->specialPrice;
                $newOrder->save();
            }

        } else {
            $newOrder = new Order();
            $newOrder->cart_id = $this->cart->id;
            $newOrder->quantity = 1;
            $newOrder->product_id = $product_id;
            $newOrder->product_name = $product->name;
            $newOrder->product_format = $product->formatProduct ;
            $newOrder->product_price = $product->price;
            $newOrder->product_ps_price = $product->specialPrice;
            $newOrder->save();
        }

        $this->dispatch('update-manual-cart');
    }

   public function updated()
    {
        //dd(54545);
        if (strlen($this->wordSearch) > 3) {
            $this->products = Product::query()
                ->where('formatProduct', ['normal' , 'service'])
                ->where('name', 'LIKE', '%' . $this->wordSearch . "%")
                ->get();

            $this->render();
        }
    }

    public function search_products()
    {
        //dd($this->wordSearch);
        if (strlen($this->wordSearch) > 3) {
            $this->products = Product::query()
                ->where('formatProduct', ['normal' , 'service'])
                ->where('name', 'LIKE', '%' . $this->wordSearch . "%")
                ->get();

            $this->render();
        }
    }

    public function switchNewProduct()
    {
        $this->addNewProductView = !$this->addNewProductView ;
    }

    public function addNewProduct()
    {
        $newProduct = new Product();
        $newProduct->name = $this->new_product_name ;
        $newProduct->user_id = Auth::id() ;
        $newProduct->number_of_days_to_expiry = 0 ;
        $newProduct->save() ;

        $newOrder = new Order();
        $newOrder->cart_id = $this->cart->id;
        $newOrder->quantity = 1;
        $newOrder->product_id = $newProduct->id;
        $newOrder->product_name = $newProduct->name;
        $newOrder->product_format = 'normal' ;
        $newOrder->product_price = 1 ;
        $newOrder->save();
        
        $this->dispatch('update-manual-cart');

    }
}
