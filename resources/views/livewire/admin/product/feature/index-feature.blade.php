<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($features as $feature)
                <div class="card mb-2 shadow">
                    <div class="card-body">
                        @livewire('admin.product.feature.row-feature' , ['feature' => $feature]  , key($feature->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card border-color-runy-secend">
            <div class="card-header bg-runy-secend">دسترسی محصولات</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ asset(route('product.index')) }}">
                        <i class="fa-solid color-runy-primary fa-list fa-rotate-180 p-2"></i>
                        محصولات
                    </a>
                </li>
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
                    <a href="{{ asset('feature.index') }}">
                        <i class="fa-solid color-runy-primary fa-list-check fa-rotate-180 p-2"></i>
                        ویژگی های محصولات
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
