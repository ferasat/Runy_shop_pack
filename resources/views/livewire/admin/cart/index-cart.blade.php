<section class="scroll-section" id="listCarts">
    <div class="card h-100-card">
        <div class="card-body mb-n2 border-last-none h-100">
            @foreach($carts as $cart)
                @livewire('admin.cart.cart-row' , ['cart' => $cart]  , key($cart->id))
            @endforeach
        </div>
        <div class="card-footer">{{ $carts->links() }}</div>
    </div>
</section>
