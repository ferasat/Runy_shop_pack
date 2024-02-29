<div class="">
    <div class="row ">
        <div class="col-xl-9 mb-5">
            <h3 class="h3">در خواست های سرویس</h3>
            <section class="scroll-section" id="listPost">

                <div class="card h-100-card">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @foreach($requests as $request)
                            @livewire('admin.requests.row-request' , [ 'request' => $request ]  , key($request->id))
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-3 mb-5">
            <div class="card ">
                <div class="card-header">دسترسی ها</div>
                <div class="card-body mb-n2 border-last-none">

                    <!-- Button Trigger -->
                    <button type="button" class="btn btn-outline-primary w-100 mb-2" data-bs-toggle="modal"
                            data-bs-target="#addRequest">
                        ایجاد در خواست جدید
                    </button>

                    <!-- Button Trigger -->
                    <a type="button" class="btn btn-outline-primary w-100 mb-2" href="{{ asset(route('department.index')) }}">
                        مدیریت بخش ها
                    </a>


                </div>
            </div>
        </div>
    </div>

</div>
