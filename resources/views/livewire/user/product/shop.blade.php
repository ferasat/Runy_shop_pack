<div class="container">
    <div class="row">
        <div class="col-12">
            @livewire('user.theme.breadcrumbs' , compact('breadcrumbs'))
        </div>
    </div>
    <div class="row">
        <!-- Blog entries-->
        @if(strlen($search) == 0 )
        <div class="col-md-8 m-auto mb-5">
            <h1 class="text-danger text-center font-family-Lalezar-Regular" itemprop="name">فروشگاه ماشین های اداری مرتضوی</h1>
            <h2 class="text-danger text-center" >نمایندگی Brother در اصفهان</h2>
            <p class="text-muted py-3 text-center">با گارانتی اصالت کالا </p>
            <form class="custom-form" role="search">
                <div class="input-group input-group-lg mb-2">
                    <input wire:model="search" name="keyword" type="search" class="form-control border-color-runy-danger" id="keyword"
                           placeholder="دنبال چه دستگاهی میگردی؟" aria-label="Search">

                    <button type="submit" class="btn btn-runy-search bg-white" wire:click.prevent="searchBtn()">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                    stroke="#fd5858" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                پیشنهاد : <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">
                        <a href="{{ asset('/shop?search=پرینتر+لیزری+برادر') }}">پرینتر لیزری برادر</a>
                    </span>
                ، <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">
                    <a href="{{ asset('/shop?search=پرینتر+چند+کاره+Brother') }}">پرینتر چند کاره Brother</a>
                    پرینتر چند کاره Brother</span>
                <span></span>
            </form>
        </div>
        @endif
        <div class="col-md-9">
            @if(strlen($search) > 1 )
                <div class=" d-lg-flex justify-content-between bg-light py-3 px-4 job-item align-items-center mb-4 ">
                    <p>جستجو برای : <strong>{{ $search }}</strong></p>
                </div>
            @endif

            <!-- Featured blog post-->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($products as $product)
                    <div class="col">
                        <div class="card h-100">
                            <a href="{{ asset('product/'.$product->slug) }}">
                                <img src="{{ asset($product->pic) }}" class="card-img-top" alt="{{ $product->name }}">
                            </a>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h3 title="{{ $product->name }}" class="font-size-16">
                                        <a href="{{ asset('product/'.$product->slug) }}">{{ $product->name }}</a>
                                    </h3>
                                    <!-- Product price-->
                                    @if($product->price == 0 or $product->price == '0' or $product->price == null )
                                    @elseif($product->price > 0 and $product->specialPrice > 0 )
                                        <span class="text-decoration-line-through  ">{{$product->price}} تومان</span>
                                        {{ $product->specialPrice }} تومان
                                    @else
                                        <div class="text-md-start">
                                            {{ $product->price }} تومان
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination-->
            <div class="row">
                <div class="col pt-2">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
        <!-- Side widgets-->
        <div class="col-md-3">
            <!-- Search widget-->
            <div class="card mb-4 sticky-top">
                <div class="card-header">جستجوی محصول</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" wire:model="search"
                               placeholder="نام محصول مورد نظر خود را بنویسید"/>
                        <button class="btn btn-primary" id="button-search" wire:click.prevent="searchBtn()">جستجو
                        </button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            @livewire('user.theme.sidebar.products-brands')

        </div>
    </div>
</div>
