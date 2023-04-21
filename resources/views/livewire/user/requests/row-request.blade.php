<div class="card border-bottom  my-2 p-2">
    <div class="row g-0 ">
        <div class="col-6 col-md-2 p-2">
            <div class="badge p-3 bg-warning">
                {{ $request->rqs_code }}
            </div>
        </div>
        <div class="col-6 col-md-2 p-2">
            <div class="d-flex flex-column">
                <div>عنوان : {{ $request->name }}</div>
                <div class="text-small text-muted">وضعیت : {{ $request->status }}</div>
            </div>
        </div>
        <div class="col-md-10 p-2">
            <div class="d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">

                <div class="d-flex">

                    <a class="btn btn-outline-info btn-sm ms-1"  href="{{asset('/dashboard/rqsts/show/'.$request->id)}}" type="button" target="_blank">دیدن</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger btn-sm ms-1" >
                        مسئول: {{ fullName($request->sponsor_id) }}
                    </button>

                    <!-- Modal -->


                </div>
            </div>
        </div>
    </div>
</div>
