<div class="row ">
    <div class="col-xl-9 mb-5">
        <section class="scroll-section" id="listPost">

            <div class="card ">
                <div class="card-header"><label for="name" class="form-label">عنوان در خواست
                        :</label>: {{ $rqst->name }}
                    <br></div>
                <div class="card-body mb-n2 border-last-none">

                    <div class="row g-3">
                        <div class="col-md-4">

                            <label for="department" class="form-label">بخش
                                :</label>{{ get_department_name($rqst->for_department_id) }}<br>
                            <label for="status" class="form-label">وضعیت درخواست </label>: {{ $rqst->status }} <br>
                        </div>
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">
                            @if($this->rqst->files !== null)
                            @foreach(json_decode($this->rqst->files)->file as $file)
                                <a target="_blank" href="{{asset($file->url)}}">
                                    <img class="img-thumbnail" src="{{asset($file->url)}}" alt="{{$file->name}}">
                                </a>
                            @endforeach
                            @endif
                        </div>


                        <div class="col-md-12">
                            <label for="description" class="form-label">توضیحات</label>: {{$rqst->note}}
                        </div>
                    </div>
                </div>
                <div class="card-footer p-3">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">

                            <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#replayToRqst" aria-expanded="false" aria-controls="replayToRqst"
                                    wire:click.prefetch="toggleContent">
                                پاسخ
                            </button>


                        </div>
                    </div>
                </div>
            </div>


            <div class="collapse" id="replayToRqst" wire:ignore>
                <form class="card mt-4" method="post" action="{{ asset(route('rqsts.replay').'?rqst_id='.$rqst->id) }}">
                    @csrf
                    <div class="card-header p-3">پاسخ به در خواست</div>
                    <div class="card-body">
                        <textarea class="form-control texts" wire:model.lazy="texts" id="texts"
                                  name="texts"></textarea>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">ارسال پاسخ</button>
                    </div>
                </form>
            </div>


            <div class="card mt-4">
                <div class="card-header p-3">
                    <h5>آخرین پاسخ ها :</h5>
                </div>
            </div>

            @if($countRp > 0)
            @foreach($sub_replays as $replay)
                <div class="card mt-4">
                    <div class="card-header p-3">
                        <div class="badge bg-warning" style="width: 80px">
                            <img class="profile max-w-100 rounded-circle" alt="profile" src="{{ asset('/img/profile/profile-11.jpg') }}"/>
                        </div>
                        پاسخ {{ fullName($replay->user_id) }} :
                    </div>
                    <div class="card-body">
                        {!! $replay->text !!}
                    </div>
                    <div class="card-footer small">
                        <span>پاسخ داده شده در تاریخ : </span><strong>{{verta($replay->created_at)->format(' %d %B %Y ، H:i')}}</strong>
                    </div>
                </div>
            @endforeach
            @endif

        </section>
    </div>
    <div class="col-xl-3 mb-5">
        <div class="card ">
            <div class="card-header">اطلاعات درخواست</div>
            <div class="card-body mb-n2 border-last-none">
                <div class="title">
                    کد پیگیری : <strong>{{ $rqst->rqs_code }}</strong>
                </div>
                <div class="mb-3">
                    <label for="sponsor_id" class="form-label">کارمند مسئول</label>
                    <select class="form-control" id="sponsor_id" wire:model="sponsor_id">
                        <option>بدون مسئول رسیدگی</option>
                        @foreach($employees as $employee)
                            <option value="{{$employee->id}}">{{fullName($employee->id)}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">وضعیت در خواست</label>
                    <select type="text" class="form-control" id="status" wire:model="status">
                        <option value="در حال بررسی">در حال بررسی</option>
                        <option value="مشخص شدن مشکل">مشخص شدن مشکل</option>
                        <option value="صدور فاکتور">صدور فاکتور</option>
                        <option value="در حال سرویس">در حال سرویس</option>
                        <option value="آماده تحویل">آماده تحویل</option>
                        <option value="تحویل داده شده">تحویل داده شده</option>
                        <option value="ثبت اولیه">ثبت اولیه</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

