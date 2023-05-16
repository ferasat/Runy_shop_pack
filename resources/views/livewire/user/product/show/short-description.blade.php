<div>

    <div class="mt-2 mb-4 text-justify ql-align-justify">
        {!! $product -> shortDescription !!}
    </div>

    @livewire('user.cart.add-to-cart' , compact('product'))

</div>
