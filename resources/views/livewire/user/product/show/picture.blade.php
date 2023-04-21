<div class="col mb-5">
    <div class="card sh-45 hover-img-scale-up hover-reveal">
        <img src="{{ asset($product->pic) }}" class="card-img h-100 scale" alt="card image">
        <div class="card-img-overlay d-flex flex-column justify-content-between reveal-content">
            <div>
                <h5 class="card-title text-white mb-1">4.85</h5>
                <div class="br-wrapper br-theme-cs-icon d-inline-block text-white">
                    <div class="br-wrapper">
                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5" style="display: none;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a><div class="br-current-rating">5</div></div></div>
                </div>
                <div class="text-white d-inline-block text-small align-text-top">(25)</div>
            </div>
            <div>
                <a href="#" class="heading text-white stretched-link">{{$product->name}}</a>
                <div class="d-flex align-items-center me-3 mt-2">

                    <div class="d-inline-block">
                        @if($cats = catsInPro($product->id))
                        @foreach(catsInPro($product->id) as $tanx )
                            <div class="text-white">{{ infoCatPro($tanx->item_id)->name }}</div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
