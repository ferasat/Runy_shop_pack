<div class="">
    <div class="row ">
        <div class="col-xl-9 mb-5">
            <section class="scroll-section" id="listPost">

                @foreach($requests as $request)
                    @livewire('user.requests.row-request' , [ 'request' => $request ]  , key($request->id))
                @endforeach

            </section>
        </div>
        <div class="col-xl-3 mb-5">
            <div class="card ">
                <div class="card-header p-3">دسترسی ها</div>
                <div class="card-body mb-n2 border-last-none">

                    <!-- Button Trigger -->
                    <a href="{{asset('/fix_request')}}" class="btn btn-outline-primary w-100 mb-2">
                        ایجاد در خواست جدید
                    </a>


                </div>
            </div>
        </div>
    </div>

</div>
