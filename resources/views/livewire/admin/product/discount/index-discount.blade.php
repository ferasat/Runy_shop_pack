<div class="row ">

    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($discounts as $discount)
                <div class="card ">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @livewire('admin.product.discount.row-discount' , ['discount' => $discount]  , key($discount->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card">
            <div class="card-header">دسترسی تخفیف ها</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">

                    <a href="{{ asset(route('discount.index')) }}">
                        <i class="fa-solid fa-list fa-rotate-180"></i>
                        تخفیف ها
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="{{asset(route('discount.create'))}}">
                        <i class="fa-regular fa-square-plus"></i>
                        تخفیف جدید
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>
