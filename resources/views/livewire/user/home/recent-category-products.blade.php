<div class="">
    <section class="bg-color-secend py-5 my-5 svg_bg">
        <div class="container">

            <div class="row">
                <div class="owl-carousel">
                    @foreach($products as $product)
                        <div class="m-2">
                            <div class="product-grid bg-white">
                                <div class="product-image">
                                    <a href="{{ asset('/product/'.$product->slug) }}" class="image">
                                        <img class="pic-1" src="{{ asset($product->pic) }}" alt="{{ $product->name }}">
                                    </a>
                                    @if(off_percent($product->price , $product->specialPrice))
                                        <span class="product-discount-label">{{ off_percent($product->price , $product->specialPrice) }}%</span>
                                    @endif
                                    <ul class="product-links">
                                        <li>
                                            <a href="#" data-tip="افزودن به سبد خرید">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tip="محصولات مشابه">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title" title="{{ $product->name }}"><a
                                            href="{{ asset('product/'.$product->slug) }}">{{ $product->name }}</a></h3>
                                    <div class="price">
                                        @if(off_percent($product->price , $product->specialPrice))
                                            <span>{{ $product->price .' '.current_pay($product->current) }}</span> {{ $product->specialPrice.' '.current_pay($product->current) }}
                                        @endif

                                    </div>
                                    <a class="add-to-cart" href="{{ asset('product/'.$product->slug) }}">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center mt-2 pt-3">
                    <svg fill="#fc454a" height="40px" width="80px" version="1.1" id="Icons"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M21,2H11c-5,0-9,4-9,9v10c0,5,4,9,9,9h10c5,0,9-4,9-9V11C30,6,26,2,21,2z M19.7,16.7l-5,5C14.5,21.9,14.3,22,14,22 s-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l4.3-4.3l-4.3-4.3c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l5,5C20.1,15.7,20.1,16.3,19.7,16.7z"></path>
                        </g></svg>
                    <a href="{{ asset('/shop') }}" class="btn text-danger h4">مشاهده همه محصولات</a>
                    <svg fill="#fc454a" height="40px" width="80px" version="1.1" id="Icons"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M21,2H11c-5,0-9,4-9,9v10c0,5,4,9,9,9h10c5,0,9-4,9-9V11C30,6,26,2,21,2z M18.7,20.3c0.4,0.4,0.4,1,0,1.4 C18.5,21.9,18.3,22,18,22s-0.5-0.1-0.7-0.3l-5-5c-0.4-0.4-0.4-1,0-1.4l5-5c0.4-0.4,1-0.4,1.4,0s0.4,1,0,1.4L14.4,16L18.7,20.3z"></path>
                        </g></svg>
                </div>
            </div>

        </div>

    </section>
</div>

