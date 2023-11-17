<div class="card">
    <img src="{{ asset($product->pic) }}" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
        <h5 class="heading mb-3">
            <a href="{{ asset('product/'.$product->slug) }}" class="body-link stretched-link">
                            <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
                                {{ $product->name }}
                            </span>
            </a>
            <div class="text-md-start">
                {{ $product->price }} تومان
            </div>
        </h5>
        <div>
            <div class="row g-0">

                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20"
                         fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                         stroke-linejoin="round" class="cs-icon cs-icon-clock text-primary me-1">
                        <path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path>
                        <circle cx="10" cy="10" r="8"></circle>
                    </svg>
                    <a href="{{ asset('product/'.$product->slug) }}">اطلاعات بیشتر<span class="align-middle"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
