<div class="">
    <div class="card shadow">
        <div class="card-header">مکان تسویه حساب</div>
        <div class="card-body">
            <div class="d-block">
                <div class="form-group">
                    <label for="pay_place">تعیین مکان تسویه حساب</label>
                    <select type="" class="form-control" id="pay_place" name="pay_place" wire:model="pay_place">
                        <option value="0">تعیین نشده</option>
                        <option value="دفترمرکزی">دفترمرکزی</option>
                        <option value="جایگاهCIP">جایگاهCIP</option>
                        <option value="آنلاین">آنلاین</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" wire:click.prevent="savePlacePay()" @if($btnDisableStatusPlay) disabled @endif>ذخیره</button>
        </div>
    </div>

    <form method="post" action="{{ asset('/dashboard/cip/change_status_acc_cip') }}" enctype="multipart/form-data" class="card shadow" id="{{ rand(1,99) }}">
        @csrf
        <div class="card-header @if($status_acc_cip == 'پرداخت نشده') font-weight-bold bg-danger @else bg-success @endif ">تعیین وضعیت پرداخت : {{ $status_acc_cip }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="statusReInCip">تعیین وضعیت پرداخت رزرو</label>
                        <select type="" class="form-control" id="statusReInCip" name="status_acc_cip" wire:model="status_acc_cip">
                            <option value="پرداخت نشده">پرداخت نشده</option>
                            <option value="پرداخت حضوری">پرداخت حضوری</option>
                            <option value="پرداخت آنلاین">پرداخت آنلاین</option>
                            <option value="پرداخت شده روی تور">پرداخت شده روی تور</option>
                            <option value="پرداخت شده روی بلیط">پرداخت شده روی بلیط</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                </div>
                @if($status_acc_cip == 'پرداخت حضوری')
                    <div  class="col-12">
                        <label class="sr-only" for="fishFile">بارگذاری فیش</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">بارگذاری فیش</div>
                            </div>
                            <input type="file" class="form-control" id="fishFile" name="fishFile">
                            <input type="hidden" class="form-control" value="{{ $reserve->id }}" name="cip_id">
                        </div>
                    </div>
                    <div class="col-12 py-4 mt-3">
                        <ul class="list-group">
                            @foreach($fishFiles as $file)
                                <li class="list-group-item">
                                    <a target="_blank" href="{{ asset($file->path) }}">
                                        {{ $file->filename }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item">پرداخت حضوری:هزینه کامل به صورت حضوری پرداخت شده است. قابلیت بارگذاری فیش پرداخت را دارد</li>
            <li class="list-group-item">پرداخت آنلاین:مسافر آنلاین رزرو و پرداخت را انجام داده است </li>
            <li class="list-group-item">برای پرداخت های روی تور و بلیط هزینه از مسافر گرفته شده است</li>
            <li class="list-group-item">در همه موارد جز <strong class="text-danger">پرداخت نشده </strong>هزینه ها به طور کامل پرداخت شده است و جایگاه نباید از مسافر پول بگیرد</li>
            <li class="list-group-item text-danger">فقط در وضعیت پرداخت نشده جایگاه باید از مسافر پول بگیرد</li>
        </ul>
        <div class="card-footer">
            @if($status_acc_cip == 'پرداخت حضوری')
                <button type="submit" wire:click="btn_status_acc()" class="btn btn-primary"
                        @if($btnDisableStatusAcc) disabled @endif >ذخیره
                </button>
            @else
                <button wire:click.prevent="btn_status_acc()" class="btn btn-primary"
                        @if($btnDisableStatusAcc) disabled @endif >ذخیره
                </button>
            @endif
        </div>
    </form>
    {{--<div class="card">
        <div class="card-header">وضعیت پرداخت از دید کانتر</div>
        <div class="card-body">
            <strong class="d-block">
                وضعیت پرداخت : {{ $reserve->status_acc }}
            </strong>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary" wire:click="changeStatusAccCounter('پرداخت نشده')">پرداخت نشده</button>
                <button type="button" class="btn btn-secondary" wire:click="changeStatusAccCounter('پرداخت حضوری')">پرداخت حضوری</button>
                <button type="button" class="btn btn-secondary" wire:click="changeStatusAccCounter('پرداخت آنلاین')">پرداخت آنلاین</button>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>--}}
    <div class="card shadow">
        <div class="card-header">صورت حساب/وضعیت پرداخت</div>
        <div class="card-body">
            @if(count($invoices))
                <ul class="list-group">
                    @foreach($invoices as  $invoice)
                        <li class="list-group-item my-1 border @if($invoice->status == 0) border-danger @elseif($invoice->status == 1) border-warning @elseif($invoice->status == 2) border-success @endif ">
                            <ul>
                                <li>مبلغ : {{ number_format($invoice->amount) }}</li>
                                <li>وضعیت : {{ status_pay($invoice->status) }}</li>
                                <li>تاریخ ایجاد : {{ verta($invoice->created_at) }}</li>
                                <li>تاریخ پرداخت/تغییر : {{ verta($invoice->updated_at) }}</li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            @else
                <strong>فاکتوری صادر نشده</strong>
            @endif

        </div>

        <div class="card-footer">
            <button class="btn btn-primary" wire:click.prevent="makeInvoice({{ $reserve->id }})">صدور لینک پرداخت جدید
            </button>
            @if($showMess)
                <span class="d-block text-white bg-success p-2 rounded-2 my-1">پیام ارسال شد</span>
            @endif
        </div>
    </div>


</div>
