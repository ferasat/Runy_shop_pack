<div class="">
    <section class="bg-color-secend py-5 my-5 svg_bg">
        <div class="container">

            <div class="row">
                <div class="col-12">
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
                </div>
                <div class="d-flex justify-content-center mt-2 pt-3">

                    <a href="{{ asset('/shop') }}" class="btn bg-white p-3 rounded-5 text-danger h4">
                        <svg viewBox="0 0 1024 1024" class="icon-svg-panel" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(0)matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M845.4 383H758c-16.6 0-30-13.4-30-30s13.4-30 30-30h87.4c16.6 0 30 13.4 30 30s-13.5 30-30 30zM662.3 383H263.1c-16.6 0-30-13.4-30-30s13.4-30 30-30h399.2c16.6 0 30 13.4 30 30s-13.5 30-30 30z" fill="#052e7f"></path><path d="M433.2 873.2m-55 0a55 55 0 1 0 110 0 55 55 0 1 0-110 0Z" fill="#2b2e45"></path><path d="M854.5 873.2m-55 0a55 55 0 1 0 110 0 55 55 0 1 0-110 0Z" fill="#2b2e45"></path><path d="M889.8 722.1h-511c-37.7 0-68.4-30.7-68.4-68.4v-1.4L274.5 270v-0.2-0.2l-6-55.4c-8.6-86.8-57.6-117.5-97.3-128.1L101.5 69c-16.1-4-32.3 5.9-36.3 22s5.9 32.3 22 36.3l68.9 16.9c16.2 4.3 28.1 12.4 36.6 24.7 8.6 12.4 14 29.7 16.1 51.4l6 55.6 35.6 379.3c0.8 70.1 58.1 126.9 128.4 126.9h511c16.6 0 30-13.4 30-30s-13.4-30-30-30z" fill="#ff0000"></path><path d="M840.3 197.8H381c-16.6 0-30 13.4-30 30s13.4 30 30 30h459.3c30.2 0 54.9 24.3 55.5 54.3l-19.9 226.5-0.1 1.3v1.3c0 30.6-24.9 55.5-55.5 55.5H436c-16.6 0-30 13.4-30 30s13.4 30 30 30h384.3c63.2 0 114.7-51.1 115.5-114.1L955.7 316l0.1-1.3v-1.3c0-63.8-51.8-115.6-115.5-115.6z" fill="#ff0000"></path><path d="M408.5 842.1c7.2 0 13.1 5.9 13.1 13.1s-5.9 13.1-13.1 13.1-13.1-5.9-13.1-13.1 5.9-13.1 13.1-13.1m0-60c-40.4 0-73.1 32.7-73.1 73.1s32.7 73.1 73.1 73.1 73.1-32.7 73.1-73.1-32.7-73.1-73.1-73.1zM823.1 842.1c7.2 0 13.1 5.9 13.1 13.1s-5.9 13.1-13.1 13.1-13.1-5.9-13.1-13.1 5.9-13.1 13.1-13.1m0-60c-40.4 0-73.1 32.7-73.1 73.1s32.7 73.1 73.1 73.1 73.1-32.7 73.1-73.1-32.7-73.1-73.1-73.1z" fill="#ff0000"></path></g></svg>
                        مشاهده همه محصولات</a>

                </div>
            </div>

        </div>

    </section>
</div>

