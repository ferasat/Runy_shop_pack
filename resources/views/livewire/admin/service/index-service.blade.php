<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($services as $service)
                <div class="card mb-2 shadow">
                    <div class="card-body">
                        @livewire('admin.service.row-service' , ['service' => $service]  , key($service->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="service-menu card border-runy-service">
            <div class="card-header bg-runy-secend">دسترسی محصولات</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ asset(route('service.index')) }}" class="active">
                        <i class="fa-solid color-runy-primary fa-list fa-rotate-180 p-2"></i>
                        خدمات
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ asset(route('service.create')) }}">
                        <i class="fa-regular color-runy-primary fa-square-plus p-2"></i>
                        خدمات جدید
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
