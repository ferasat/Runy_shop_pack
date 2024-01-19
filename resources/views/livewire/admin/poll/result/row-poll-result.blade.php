<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex ">
                    <div class="p-2">{{ $poll ->id." ".$poll -> name }}</div>
                    <div class="p-2">
                        @if($poll->status==1)
                            دیده
                        @else
                            ندیده
                        @endif
                    </div>
                    <div class="p-2">{{fullName($poll->user_id)}}</div>

                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-warning btn-sm ms-1"
                       href="{{ asset('/dashboard/poll/show/'.$poll -> id)  }}" type="button">دیدن</a>

                </div>
            </div>
        </div>
    </div>
</div>
