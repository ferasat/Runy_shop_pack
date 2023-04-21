<div class="">
    <div class=" d-flex justify-content-between">
        <div class="card-body">
            <p class="mb-0">{{$description}} .</p>
        </div>

        <a class="btn btn-primary btn-sm ms-1 shadow" href="{{ asset(route('product.Create')) }}">محصول جدید</a>

    </div>

    <div class="row ">
        <div class="col-xl-8 mb-5">
            <section class="scroll-section" id="listPost">

                <div class="card h-100-card">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @foreach($products as $product)
                            @livewire('admin.product.row-product' , ['product' => $product]  , key($product->id))
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-4 mb-5">
            <div class="card ">
                <div class="card-header">دسترسی ها</div>
                <div class="card-body mb-n2 border-last-none">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{asset(route('category.product'))}}">دستبندی ها</a></li>
                        <li class="list-group-item"><a href="#">برچسب ها</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
