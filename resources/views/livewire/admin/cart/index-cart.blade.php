<section class="scroll-section" id="listCarts">
    <div class="card ">
        <div class="card-header">آخرین سفارشات</div>
        <div class="card-body mb-n2  ">
            @foreach($carts as $cart)
                @livewire('admin.cart.cart-row' , ['cart' => $cart]  , key($cart->id))
            @endforeach
        </div>
        <div class="card-footer">{{ $carts->links() }}</div>
    </div>
</section>
