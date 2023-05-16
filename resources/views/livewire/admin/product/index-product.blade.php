<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($products as $product)
                <div class="card ">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @livewire('admin.product.row-product' , ['product' => $product]  , key($product->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card">
            <div class="card-header">دسترسی محصولات</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">

                    <a href="{{ asset(route('product.index')) }}">
                        <i class="fa-solid fa-list fa-rotate-180"></i>
                        محصولات
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="{{ asset(route('product.Create')) }}">
                        <i class="fa-regular fa-square-plus"></i>
                        محصول جدید
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="{{asset(route('category.product'))}}" class="active">
                        <i class="fa-solid fa-bars-staggered fa-rotate-180"></i>
                        دستبندی محصولات
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="profile-favorites.html">
                        <i class="fa-solid fa-notes-medical fa-rotate-180"></i>
                        برجسب محصولات
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="profile-personal-info.html">
                        <i class="fa-solid fa-list-check fa-rotate-180"></i>
                        ویژگی های محصولات
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
