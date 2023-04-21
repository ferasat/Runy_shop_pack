<div class="">
    <div class="card mb-2">
        <a class="row g-0 sh-10">
            <div class="col-auto">
                <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                    <i data-cs-icon="cupcake" class="text-primary"></i>
                </div>
            </div>
            <div class="col">
                <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="text-alternate">تازه ترین محصولات</div>
                        <div class="text-small text-muted">جدیدترین و با کیفیت ترین محصولات</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-5 g-2 mb-5">
        @foreach(recentProducts(10) as $product)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset($product->pic) }}" class="card-img-top sh-19" alt="card image">
                    <div class="card-body">
                        <h5 class="heading mb-3">
                            <a href="{{ asset('product/'.$product->slug) }}" class="body-link stretched-link">
                            <span class="clamp-line sh-5" data-line="2"
                                  style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
                                {{ $product->name }}
                            </span>
                            </a>

                            @if($product->price == 0 or $product->price == '0' or $product->price == null )
                            @else
                                <div class="text-md-start">
                                    {{ $product->price }} تومان
                                </div>
                            @endif
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
                                    <a href="{{ asset('product/'.$product->slug) }}">اطلاعات بیشتر<span
                                            class="align-middle"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
