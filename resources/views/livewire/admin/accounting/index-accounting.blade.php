<div>
    <div class="row pt-5">
        <div class="col-md-12 d-flex justify-content-end pb-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStatment">
                ساخت دفتر حساب
            </button>


            <!-- Modal -->
            <div class="modal fade" id="addStatment" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                                    <option value="مسافر">مسافر</option>
                                    <option value="شرکت همکار">شرکت همکار</option>
                                    <option value="هتل">هتل</option>
                                    <option value="بانک">بانک</option>
                                    <option value="صرافی">صرافی</option>
                                    <option value="ایرلاین">ایرلاین</option>
                                    <option value="تامین کننده">تامین کننده</option>
                                </select>
                                <small id="item_typeHelp" class="form-text text-muted">دستبندی طرف حساب ها</small>
                                <small id="item_typeHelp" class="form-text text-muted">تامین کننده ها مثل اسنپ تریپ و یا پرتو و ... را شامل می شود</small>
                            </div>
                            <div class="form-group">
                                <label for="statement_name">نام دفتر حساب</label>
                                <input type="text" class="form-control" id="statement_name"
                                       wire:model.lazy="statement_name" aria-describedby="statement_nameHelp">
                                <small id="statement_nameHelp" class="form-text text-muted">نام دفتر حساب می تونه با نام
                                    دفتر حساب فراسو یکی باشه</small>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                            <button type="submit" class="btn btn-primary btn-lg">بساز</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                            role="tab" aria-controls="home" aria-selected="true">تراکنش های امروز
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="diroz-tab" data-toggle="tab" data-target="#diroz" type="button"
                            role="tab" aria-controls="diroz" aria-selected="false">تراکنش های دیروز
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="seroz-tab" data-toggle="tab" data-target="#seroz" type="button"
                            role="tab" aria-controls="seroz" aria-selected="false">تراکنش های 30 روز پیش
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        <td>{{ status_pay($transaction->status)  }}</td>
                                        <td>@livewire('admin.invoice.invoice-info-to-transaction' , ['invoice_id' =>
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
                <div class="tab-pane fade" id="diroz" role="tabpanel" aria-labelledby="diroz-tab">
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
                                        <td>{{ status_pay($transaction->status)  }}</td>
                                        <td>@livewire('admin.invoice.invoice-info-to-transaction' , ['invoice_id' =>
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
                <div class="tab-pane fade" id="seroz" role="tabpanel" aria-labelledby="seroz-tab">
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
                                        <td>{{ status_pay($transaction->status)  }}</td>
                                        <td>@livewire('admin.invoice.invoice-info-to-transaction' , ['invoice_id' =>
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
