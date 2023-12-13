<div class="row ">
    <div class="col-xl-8 mb-5">
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" class="form-control" id="" wire:model.live="word" placeholder="برای جستجو حداقل سه حرف وارد کنید">
            </div>
        </div>
        <section class="scroll-section" id="listProduct">
            @foreach($products as $product)
                <div class="card mb-2 shadow">
                    <div class="card-body">
                        @livewire('admin.product.row-product' , ['product' => $product]  , key($product->id))
                    </div>
                </div>
            @endforeach
        </section>
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card border-color-runy-secend">
            <div class="card-header bg-runy-secend">دسترسی محصولات</div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                    <a href="{{ asset(route('product.Create')) }}">
                        <i class="fa-regular color-runy-primary fa-square-plus p-2"></i>
                        محصول جدید
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{asset(route('category.product'))}}" class="active">
                        <i class="fa-solid color-runy-primary fa-bars-staggered fa-rotate-180 p-2"></i>
                        دستبندی محصولات
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa-solid color-runy-primary fa-notes-medical fa-rotate-180 p-2"></i>
                        برجسب محصولات
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ asset(route('feature.index')) }}">
                        <i class="fa-solid color-runy-primary fa-list-check fa-rotate-180 p-2"></i>
                        ویژگی های محصولات
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ asset(route('discount.index')) }}">
                        <i class="fa-solid color-runy-primary fa-list fa-rotate-180 p-2"></i>
                        تخفیف ها
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
