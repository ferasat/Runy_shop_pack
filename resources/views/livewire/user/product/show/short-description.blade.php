<div>
    @if($cats = catsInPro($product->id))
        @foreach($cats as $tanx )
            <a class="mb-1 d-inline-block text-small">{{ infoCatPro($tanx->item_id)->name }}</a>
        @endforeach
    @endif
    <h1 class="mb-4 h3">{{ $product-> name }}</h1>
    @if($product->price == 0 or $product->price == '0' or $product->price == null )
    @else
        @if($product->specialPrice > 1)
            <div class="text-muted text-overline">
                <del>{{ $product-> price }} <span> تومان </span></del>
            </div>
            <div class="h4">{{ $product-> specialPrice }} <span> تومان </span></div>
        @else
            <div class="h4">{{ $product-> price }} <span> تومان </span></div>
        @endif
    @endif
    <div>
        <div class="br-wrapper br-theme-cs-icon d-inline-block">
            <div class="br-wrapper">
                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5"
                        style="display: none;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="br-widget br-readonly">
                    <a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a>
                    <a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a>
                    <a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a>
                    <a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a>
                    <a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a>
                    <div class="br-current-rating">5</div>
                </div>
            </div>
        </div>
        <div class="text-muted d-inline-block text-small align-text-top d-none">(25 Reviews)</div>
    </div>
    <div class="mt-2 mb-4 text-justify ql-align-justify">
        {!! $product -> shortDescription !!}
    </div>

    @livewire('user.cart.add-to-cart' , compact('product'))

</div>
