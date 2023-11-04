<div class="row mt-3">
    <div class="col-xl-8">
        <div class="card ">
            <div class="card-header d-flex justify-content-between">
                <strong>{{ $name .' '.$family }}</strong>

                @if(!$editStatus)
                    <button class="btn btn-runy-primary" wire:click="editOn()">
                        ویرایش
                    </button>
                @else
                    <button class="btn btn-outline-success" wire:click="saveInfo()">
                        ذخیره
                    </button>

                @endif

            </div>
            <div class="card-body row">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="{{ asset($customer->pic) }}" alt="{{ $name .' '.$family }}">
                </div>
                @if(!$editStatus)
                    <div class="col-md-9">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between"><span>نام و نام خانوادگی:</span>
                                <strong>{{ $name.' '.$family }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>شماره موبایل:</span>
                                <strong>{{ $cell }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>رایانامه:</span> <strong
                                    class="text-left" dir="ltr">{{ $email }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>دستبندی:</span>
                                <strong>{{ $type }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>نام شرکت:</span>
                                <strong>{{ $company }}</strong></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="d-block">
                            <span>آدرس:</span> <strong>{{ $address }}</strong>
                        </div>
                        <div class="d-block">
                            <span>آیا عضو هست :</span> <strong>{{ fullName($customer_user_id) }}</strong>
                        </div>
                    </div>
                @else
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام</span>
                            <input type="text" class="form-control" wire:model="name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام خانوادگی</span>
                            <input type="text" class="form-control" wire:model="family">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">شماره همراه</span>
                            <input type="text" class="form-control" wire:model="cell">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">رایانامه</span>
                            <input type="text" class="form-control" wire:model="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام شرکت</span>
                            <input type="text" class="form-control" wire:model="company">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">دستبندی</span>
                            <input type="text" class="form-control" wire:model="type">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">آدرس</span>
                            <textarea class="form-control" wire:model="address"></textarea>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="col-xl-4 ">
        <div class="card ">
            <div class="card-header">لاگ مشتری</div>
            <div class="card-body">
                <ul>
                    @foreach($customerLogs as $log)
                        <li class="border rounded mb-2">
                            <div class="card-title bg-body-secondary p-2 rounded">{{ $log->log_subject .' در بخش '.$log->department }}</div>
                            <div class="card-text p-2 ">
                                {!! $log->note !!}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
