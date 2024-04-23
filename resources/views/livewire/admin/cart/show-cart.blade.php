<div>
    <div class="modal-body">
        <div class="scroll-section" id="customer_info">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="">
                                مشخصات خریدار
                            </div>
                            <button wire:click.prevent="changeToEdit()" class="btn-simple float-end">
                                <svg class="icon-svg-panel-sm " viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                       stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path opacity="0.5"
                                              d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                              stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path
                                            d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                            stroke="#6c429a" stroke-width="1.5"></path>
                                        <path opacity="0.5"
                                              d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                              stroke="#6c429a" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="card-body">
                            @if($showEdit == false)
                                <div class="py-3 d-flex justify-content-between">
                                    <span>نام و نام خانوادگی : </span>
                                    <span>{{ $cart->name }} {{ $cart->family }}</span>
                                </div>
                                <div class="py-3 d-flex justify-content-between">
                                    <span>شماره تماس : </span>
                                    <span>{{ $cart->cell }} </span>
                                </div>
                                <div class="py-3 d-flex justify-content-between">
                                    <span>کدپستی : </span>
                                    <span>{{ $cart->zip_code }} </span>
                                </div>
                                <div class="py-3 d-block">
                                    <span class="d-block">آدرس : </span>
                                    <span class="d-block">{{ $cart->address }} </span>

                                </div>
                            @else
                                <div class="d-flex justify-content-between">
                                    <span>نام : </span>
                                    <span><input class="form-control" wire:model="name"
                                                 value="{{ $cart->name }}"/></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>نام خانوادگی : </span>
                                    <span><input class="form-control" wire:model="family"
                                                 value="{{ $cart->family }}"/></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>شماره تماس : </span>
                                    <span><input class="form-control" wire:model="cell"
                                                 value="{{ $cart->cell }}"/></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>کدپستی : </span>
                                    <span><input class="form-control" wire:model="zip_code"
                                                 value="{{ $cart->zip_code }}"/></span>
                                </div>
                                <div class="d-block">
                                    <span class="d-block">آدرس : </span>
                                    <span class="d-block">
                                        <textarea class="form-control"
                                                  wire:model="address">{{ $cart->address }}</textarea>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="card-footer"></div>
                    </div>

                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">جزئیات سفارش شماره {{ $cart->id }}</div>
                        <div class="card-body">
                            <div class="mb-3 ">
                                <div class="d-flex justify-content-between">
                                    <div class="">تاریخ ایجاد :</div>
                                    <div class="">{{ verta($cart->created_at)->format('%d %B %Y , H:i') }}</div>
                                </div>
                                <div class="d-flex justify-content-between ">
                                    <div class="">بروزرسانی وضعیت:</div>
                                    <div class="">{{ verta($cart->updated_at)->format('%d %B %Y , H:i') }}</div>
                                </div>
                                <div class="d-flex justify-content-between ">
                                    <div class="">وضعیت پرداخت:</div>
                                    <div class="">{{ $cart->acc_status }}</div>
                                </div>

                            </div>
                            <div class="mb-3 ">
                                <label class="visually-hidden" for="status{{$cart->id}}">وضعیت</label>
                                <div class="input-group">
                                    <div class="input-group-text {{ statusCartColor($status) }}">وضعیت</div>
                                    <select class="form-select" id="status{{$cart->id}}" wire:model.live="status">
                                        <option value="in_process">در حال پردازش</option>
                                        <option value="ثبت سفارش">ثبت سفارش</option>
                                        <option value="در حال بستبندی">در حال بستبندی</option>
                                        <option value="apply">رسیدگی شد</option>
                                        <option value="ارسال شده">ارسال شده</option>
                                        <option value="موجود نبودن کالا">موجود نبودن کالا</option>
                                        <option value="آماده ارسال">آماده ارسال</option>
                                        <option value="تحویل داده شد">تحویل داده شد</option>
                                        <option value="برگشت خورده">برگشت خورده</option>
                                        <option value="نقص در اطلاعات">نقص در اطلاعات</option>
                                        <option value="پرداخت موفق">پرداخت موفق</option>
                                    </select>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex justify-content-between">
                                    <span>تغییر وضعیت به خریدار اطلاع داده شود</span>
                                    <span><input class="form-check-input" type="checkbox"
                                                 wire:model="notifyToCustomer"/></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" wire:click.privent="saveStatus()"
                                    @if($deactivateBtnStatus) disabled @endif>ذخیره
                            </button>
                            <br>
                            <span class="badge bg-info text-white rounded mt-2">{{ $msg_sms_status }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">فعالیت ها</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($logsCart as $log)
                                    <li class="list-group-item">
                                        <strong>{{ $log->id.'-'.$log->log_name }} :</strong> {{ $log->event }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="scroll-section" id="customer_order">
            @foreach($orders as $order)
                <div class="card mb-2">
                    <a target="_blank" href="{{ asset('/sp/'.$order->product_id) }}" class="row g-0 sh-10">
                        <div class="col-auto h-100">
                            <img src="{{ asset(infoProduct($order->product_id)->pic) }}" alt="user"
                                 class="card-img w-50px"/>
                        </div>
                        <div class="col">
                            <div
                                class="card-body d-flex flex-row pt-0 pb-0 h-100 align-items-center justify-content-between">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="mb-1">{{ infoProduct($order->product_id)->name }}</div>
                                </div>
                                <div class="d-flex flex-row ms-3">
                                    <div class="d-flex flex-column align-items-center  p-2">
                                        <div class="text-muted text-small">تعداد</div>
                                        <div class="text-alternate">{{ $order->quantity }}</div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center ms-3 p-2">
                                        <div class="text-muted text-small">فی</div>
                                        <div class="text-alternate">
                                            @if($order->product_ps_price > 2)
                                                {{ number_format($order->product_ps_price) }}
                                            @else
                                                {{ number_format($order->product_price) }}
                                            @endif
                                        </div>

                                    </div>
                                    <div class="d-flex flex-column align-items-center  p-2">
                                        <div class="text-muted text-small">هزینه</div>
                                        <div class="">
                                            @if($order->product_ps_price > 2)
                                                {{ number_format($order->quantity*$order->product_ps_price) }}
                                            @else
                                                {{ number_format($order->quantity*$order->product_price) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <span>تخفیف : {{ count_discount($cart->price , $cart->total_price) }} درصد</span>
                            <span>جمع کل :<strong>{{ number_format($cart->total_price) }} </strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
        <button type="button" class="btn btn-primary">ذخیره</button>
    </div>
</div>
