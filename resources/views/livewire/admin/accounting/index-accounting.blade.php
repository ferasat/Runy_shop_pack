<div class="container">
    <div class="row pt-5">
        <div class="col-md-12 d-flex justify-content-end pb-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStatment">
                ساخت دفتر حساب
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addStatment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="addStatmentLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addStatmentLabel">ساخت دفتر حساب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="statement_name">نام دفتر حساب</label>
                                <input type="text" class="form-control" id="statement_name"
                                       wire:model.lazy="statement_name" aria-describedby="statement_nameHelp">
                                <small id="statement_nameHelp" class="form-text text-muted">نام دفتر حساب می تونه با نام
                                    دفتر حساب فراسو یکی باشه</small>
                            </div>
                            <div class="form-group">
                                <label for="statement_id">کد دفتر حساب</label>
                                <input type="text" class="form-control" wire:model.lazy="statement_id"
                                       id="statement_id">
                                <small id="statement_idHelp" class="form-text text-danger">شناسه نمایش داده شده آخرین
                                    شناشه وارد شده است می تونید با اضافه کردن به این عدد آنرا وارد کنید <br>
                                    می تونه همون کد دفتر حساب در نرم افزار فراسو باشد<br>
                                    نباید تکراری باشد<br>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="statement_type">ماهیت دفتر حساب</label>
                                <select class="form-control" id="statement_type"
                                        wire:model.lazy="statement_type" aria-describedby="statement_typeHelp">
                                    <option value="هردو">هردو</option>
                                    <option value="بدهکار">بدهکار</option>
                                    <option value="بستانکار">بستانکار</option>
                                </select>
                                <small id="statement_typeHelp" class="form-text text-muted">نام دفتر حساب می تونه با نام
                                    دفتر حساب فراسو یکی باشه</small>
                            </div>
                            <div class="form-group">
                                <label for="statement_name">دستبندی حساب</label>
                                <select class="form-control" id="item_type"
                                        wire:model.lazy="item_type" aria-describedby="item_typeHelp">
                                    <option value="کارمند">کارمند</option>
                                    <option value="مشتری">مشتری</option>
                                    <option value="شرکت همکار">شرکت همکار</option>
                                    <option value="مشتری شرکتی">مشتری شرکتی</option>
                                    <option value="بانک">بانک</option>
                                    <option value="صرافی">صرافی</option>
                                    <option value="تامین کننده">تامین کننده</option>
                                </select>
                                <small id="item_typeHelp" class="form-text text-muted">دستبندی طرف حساب ها</small>
                                <small id="item_typeHelp2" class="form-text text-muted">شرکت همکار ، با شما همکاری در فروش کار می کند</small>
                                <small id="item_typeHelp" class="form-text text-muted">تامین کننده ، کسی یا شرکتی که شما ازش خرید می کنید</small>
                            </div>
                            <div class="form-group">
                                <label for="statement_name">نام دفتر حساب</label>
                                <input type="text" class="form-control" id="statement_name"
                                       wire:model.lazy="statement_name" aria-describedby="statement_nameHelp">
                                <small id="statement_nameHelp" class="form-text text-muted">نام دفتر حساب می تونه با نام
                                    دفتر حساب نرم افزار حسابداری شما یکی باشه</small>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                            <button type="submit" class="btn btn-primary btn-lg">بساز</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row card my-5">
        <div class="card-header">تنظیمات مالیات</div>
        <div class="card-body row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <label class="visually-hidden" for="tax">مقدار مالیات اصلی</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">مقدار مالیات اصلی</div>
                            <input type="number" class="form-control" id="tax" wire:model.live.blur="tax">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="tax_calculation_type">نوع محاسبه اصلی</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">نوع محاسبه اصلی</div>
                            <select id="tax_calculation_type" class="form-select"
                                    wire:model.live.blur="tax_calculation_type">
                                <option value="percentage">درصدی</option>
                                <option value="fixed">مقدارثابت</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <label class="visually-hidden" for="tax1">مقدار مالیات اول</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">مقدار مالیات اول</div>
                            <input type="number" class="form-control" id="tax1" wire:model.live.blur="tax1">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="tax1_calculation_type">نوع محاسبه اول</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">نوع محاسبه اول</div>
                            <select id="tax1_calculation_type" class="form-select"
                                    wire:model.live.blur="tax1_calculation_type">
                                <option value="percentage">درصدی</option>
                                <option value="fixed">مقدارثابت</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <label class="visually-hidden" for="tax2">مقدار مالیات دوم</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">مقدار مالیات دوم</div>
                            <input type="number" class="form-control" id="tax2" wire:model.live.blur="tax2">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="tax2_calculation_type">نوع محاسبه دوم</label>
                        <div class="input-group">
                            <div class="input-group-text w-50">نوع محاسبه دوم</div>
                            <select id="tax2_calculation_type" class="form-select"
                                    wire:model.live.blur="tax2_calculation_type">
                                <option value="percentage">درصدی</option>
                                <option value="fixed">مقدارثابت</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <label class="visually-hidden" for="tax3">مقدار مالیات سوم</label>
                            <div class="input-group">
                                <div class="input-group-text w-50">مقدار مالیات سوم</div>
                                <input type="number" class="form-control" id="tax3" wire:model.live.blur="tax3">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="tax3_calculation_type">نوع محاسبه سوم</label>
                            <div class="input-group">
                                <div class="input-group-text w-50">نوع محاسبه سوم</div>
                                <select id="tax3_calculation_type" class="form-select"
                                        wire:model.live.blur="tax3_calculation_type">
                                    <option value="percentage">درصدی</option>
                                    <option value="fixed">مقدارثابت</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>-->
    </div>

    <div class="row card my-5">
        <div class="card-header">تنظیمات واحد پولی</div>
        <div class="card-body row">
            <div class="col-md-4">
                <label class="visually-hidden" for="default_currency">واحد پول اصلی</label>
                <div class="input-group">
                    <div class="input-group-text w-50">واحد پول اصلی</div>
                    <select id="default_currency" class="form-select"
                            wire:model.live.blur="default_currency">
                        <option value="تومان">تومان</option>
                        <option value="ريال">ريال</option>
                        <option value="دلار">دلار</option>
                        <option value="درهم امارات">درهم امارات</option>
                        <option value="لیر">لیر</option>
                        <option value="یورو">یورو</option>
                        <option value="دلار استرالیا">دلار استرالیا</option>
                        <option value="بیتکوین">بیتکوین</option>
                        <option value="تتر">تتر</option>
                        <option value="دوچ کوین">دوچ کوین</option>
                        <option value="اتریوم">اتریوم</option>
                        <option value="شیبا">شیبا</option>
                        <option value="ترون">ترون</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <label class="visually-hidden" for="currency2">واحد پول دوم</label>
                <div class="input-group">
                    <div class="input-group-text w-50">واحد پول دوم</div>
                    <select id="currency2" class="form-select"
                            wire:model.live.blur="currency2">
                        <option value="تومان">تومان</option>
                        <option value="ريال">ريال</option>
                        <option value="دلار">دلار</option>
                        <option value="درهم امارات">درهم امارات</option>
                        <option value="لیر">لیر</option>
                        <option value="یورو">یورو</option>
                        <option value="دلار استرالیا">دلار استرالیا</option>
                        <option value="بیتکوین">بیتکوین</option>
                        <option value="تتر">تتر</option>
                        <option value="دوچ کوین">دوچ کوین</option>
                        <option value="اتریوم">اتریوم</option>
                        <option value="شیبا">شیبا</option>
                        <option value="ترون">ترون</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <label class="visually-hidden" for="currency3">واحد پول سوم</label>
                <div class="input-group">
                    <div class="input-group-text w-50">واحد پول سوم</div>
                    <select id="currency3" class="form-select"
                            wire:model.live.blur="currency3">
                        <option value="تومان">تومان</option>
                        <option value="ريال">ريال</option>
                        <option value="دلار">دلار</option>
                        <option value="درهم امارات">درهم امارات</option>
                        <option value="لیر">لیر</option>
                        <option value="یورو">یورو</option>
                        <option value="دلار استرالیا">دلار استرالیا</option>
                        <option value="بیتکوین">بیتکوین</option>
                        <option value="تتر">تتر</option>
                        <option value="دوچ کوین">دوچ کوین</option>
                        <option value="اتریوم">اتریوم</option>
                        <option value="شیبا">شیبا</option>
                        <option value="ترون">ترون</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row card my-5">
        <div class="card-header">تنظیمات درگاههای دریافت پول</div>
        <div class="card-body row">
            <div class="col-md-4">
                <label class="visually-hidden" for="default_get_way">درگاه انلاین اصلی</label>
                <div class="input-group">
                    <div class="input-group-text w-50">درگاه انلاین اصلی</div>
                    <input type="text" class="form-control" id="default_get_way" wire:model.live.blur="default_get_way">
                </div>
            </div>
            <div class="col-md-4">
                <label class="visually-hidden" for="register_receipt">درگاه ثبت فیش</label>
                <div class="input-group">
                    <div class="input-group-text w-50">درگاه ثبت فیش</div>
                    <select id="register_receipt" class="form-select"
                            wire:model.live.blur="register_receipt">
                        <option value="1">فعال</option>
                        <option value="0">غیرفعال</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <button class="btn btn-primary btn-lg w-100px d-block" wire:click.prevent="save()">ذخیره</button>
            <div class="d-block w-100">
                <div class="badge bg-runy-success">{{ $showMsg }}</div>
            </div>
        </div>
    </div>

    <div class="row pt-5">

        <div class="col-md-8">

            <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button"
                            role="tab" aria-controls="home" aria-selected="true">تراکنش های امروز
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="diroz-tab" data-bs-toggle="tab" data-bs-target="#diroz" type="button"
                            role="tab" aria-controls="diroz" aria-selected="false">تراکنش های دیروز
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="seroz-tab" data-bs-toggle="tab" data-bs-target="#seroz" type="button"
                            role="tab" aria-controls="seroz" aria-selected="false">تراکنش های 30 روز پیش
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <div class="card today_tr">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">اطلاعات</th>
                                    <th scope="col">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <th scope="row">{{ $transaction->id }}</th>
                                        <td>{{ $transaction->paid }}</td>
                                        <td>{{ $transaction->status  }}</td>
                                        <td>@livewire('admin.accounting.invoice.invoice-info-to-transaction' , ['invoice_id' =>
                                            $transaction->invoice_id ] , key($transaction -> id))
                                        </td>
                                        <td>{{ verta($transaction->updated_at) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="diroz" role="tabpanel" aria-labelledby="diroz-tab" tabindex="0">
                    <div class="card today_tow">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">اطلاعات</th>
                                    <th scope="col">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($yesterdayTransactions as $transaction)
                                    <tr>
                                        <th scope="row">{{ $transaction->id }}</th>
                                        <td>{{ $transaction->paid }}</td>
                                        <td>{{ $transaction->status  }}</td>
                                        <td>@livewire('admin.accounting.invoice.invoice-info-to-transaction' , ['invoice_id' =>
                                            $transaction->invoice_id ] , key($transaction -> id))
                                        </td>
                                        <td>{{ verta($transaction->updated_at) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seroz" role="tabpanel" aria-labelledby="seroz-tab" tabindex="0">
                    <div class="card today_30">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">مبلغ</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">اطلاعات</th>
                                    <th scope="col">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dayBefore30Transactions as $transaction)
                                    <tr>
                                        <th scope="row">{{ $transaction->id }}</th>
                                        <td>{{ $transaction->paid }}</td>
                                        <td>{{ $transaction->status  }}</td>
                                        <td>@livewire('admin.accounting.invoice.invoice-info-to-transaction' , ['invoice_id' =>
                                            $transaction->invoice_id ] , key($transaction -> id))
                                        </td>
                                        <td>{{ verta($transaction->updated_at) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card bg-blue-400">
                <div class="card-header bg-blue-400">تفکیک فروش امروز:</div>
                <div class="card-body"></div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>
