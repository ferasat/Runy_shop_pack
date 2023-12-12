<div class="">
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center h3">مرکز رزرو خدمات آنلاین ، حضوری و تلفنی مهر خانواده</h1>

                    <h6 class="text-center">از این جا می تونید وقت قبلی بگیرید</h6>

                    <div class="custom-form mt-4 pt-2 mb-lg-0 mb-5">
                        <div class="input-group input-group-lg">
                            <input name="keyword" type="search" class="form-control" id="keyword" wire:model="keyword"
                                   placeholder="چه خدمتی از ما بر میاد؟" aria-label="Search">

                            <button wire:click="search()" class="btn btn-outline-primary search_btn_pri">جستجو</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-md-12 py-3 my-5">

            <!-- Featured blog post-->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($services as $servic)
                    <div class="col">
                        <div class="card h-100">
                            <a href="{{ asset('service/'.$servic->slug) }}">
                                <img src="{{ asset($servic->pic) }}" class="card-img-top" alt="{{ $servic->name }}">
                            </a>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h3 title="{{ $servic->name }}" class="fw-bolder">
                                        <a href="{{ asset('service/'.$servic->slug) }}">{{ $servic->name }}</a>
                                    </h3>
                                    <!-- Product price-->
                                    @if($servic->price == 0 or $servic->price == '0' or $servic->price == null )
                                    @elseif($servic->price > 0 and $servic->specialPrice > 0 )
                                        <span class="text-decoration-line-through  ">{{$servic->price}} تومان</span>
                                        {{ $servic->specialPrice }} تومان
                                    @else
                                        <div class="text-md-start">
                                            {{ $servic->price }} تومان
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
                    {{ $services->links() }}
                </div>
            </div>

        </div>
    </div>
    </div>

</div>
