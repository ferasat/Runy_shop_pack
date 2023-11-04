<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($slides as $slide)

                <div class="card mb-2 shadow border-color-runy-secend">
                    <div class="card-header bg-runy-secend">اسلایدها </div>
                    <div class="card-body">
                        @livewire('admin.runy-slider-b5.row-slide' , ['slide' => $slide]  , key($slide->id))
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
                    <a href="{{ asset(route('sliderB5.index')) }}">
                        <i class="fa-solid color-runy-primary fa-list fa-rotate-180 p-2"></i>
                        اسلایدر ها
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ asset(route('sliderB5.create')) }}">
                        <i class="fa-regular color-runy-primary fa-square-plus p-2"></i>
                        اسلاید جدید
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>
