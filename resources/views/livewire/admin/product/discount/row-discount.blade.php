<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>{{$discount->code}}</div>
                </div>
                <div class="d-flex flex-column">
                    <div>{{$discount->amount}}</div>
                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/discount/edit/'.$discount->id)}}" type="button">ویرایش</a>
                    <a class="btn btn-outline-secondary btn-sm ms-1">رو نوشت</a>
                    <a class="btn btn-outline-danger btn-sm ms-1" href="#" >حذف</a>

                </div>
            </div>
        </div>
    </div>
</div>
