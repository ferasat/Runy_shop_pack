<div class="container">
    <div class="row">
        <div class="col-12">
            @livewire('user.theme.breadcrumbs' , compact('breadcrumbs'))
        </div>
    </div>
    <div class="row">
        <!-- Blog entries-->
        <div class="col-md-9">
            @if(strlen($search) > 1 )
                <div class=" d-lg-flex justify-content-between bg-light py-3 px-4 job-item align-items-center mb-4 ">
                    <p>جستجو برای  : <strong>{{ $search }}</strong> </p>
                </div>
            @else
                <div class=" d-lg-flex justify-content-between bg-light py-3 px-4 job-item align-items-center mb-4 ">

                    <div class="d-flex btn-group col-3 p-2 rounded text-danger">
                        <label class="visually-hidden" for="autoSizingSelect">مرتب سازی بر اساس</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option selected>با کیفیت ترین</option>
                            <option value="1">گران ترین</option>
                            <option value="2">ارزان ترین</option>
                            <option value="3">جدید ترین</option>
                        </select>
                    </div>
                    <a href="" class="btn btn-primary  mt-3 mt-lg-0">مرتب سازی بر اساس</a>
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
            <div class="card mb-4">
                <div class="card-header">جستجوی محصول</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" wire:model="search" placeholder="نام محصول مورد نظر خود را بنویسید"/>
                        <button class="btn btn-primary" id="button-search" wire:click.prevent="searchBtn()">جستجو</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            @livewire('user.theme.sidebar.products-brands')

        </div>
    </div>
</div>
