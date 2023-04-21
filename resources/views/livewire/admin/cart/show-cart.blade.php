<div>
    <div class="modal-body">
        <div class="scroll-section" id="costomer">
            <div class="card mb-5 tooltip-end-top" >
                <div class="card-body">
                    <p class="text-alternate mb-4"></p>
                    <div class="mb-3 filled">
                        <i data-cs-icon="user"></i>
                        <input class="form-control" placeholder="نام"  value="{{ $cart->name }}" disabled/>
                    </div>
                    <div class="mb-3 filled">
                        <i data-cs-icon="user"></i>
                        <input class="form-control" placeholder="نام خانوادگی"  value="{{ $cart->family }}" disabled/>
                    </div>

                    <div class="mb-3 filled">
                        <i data-cs-icon="phone"></i>
                        <input class="form-control" placeholder="تلفن" value="{{ $cart->cell }}" disabled/>
                    </div>

                    <div class="mb-3 filled">
                        <textarea placeholder="Message" class="form-control" name="contactMessage" rows="2" disabled>پیام مشتری: {{ $cart->note_customer }}
                        </textarea>
                        <i data-cs-icon="notebook-3"></i>
                    </div>
                </div>
                <div class="mb-3 filled ">
                    <label for="status{{$cart->id}}">وضعیت</label>
                    <select class="form-select" id="status{{$cart->id}}" wire:model="status">
                        <option value="in_process">در حال پردازش</option>
                        <option value="apply">رسیدگی شد</option>
                        <option value="posted">ارسال شد</option>
                    </select>
                </div>
            </div>
        </div>
        @foreach($orders as $order)
            <div class="card mb-2">
                <a href="#" class="row g-0 sh-10">
                    <div class="col-auto h-100">
                        <img src="{{ asset(infoProduct($order->product_id)->pic) }}" alt="user"
                             class="card-img card-img-horizontal sw-11"/>
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
                                    <div class="text-alternate">{{ $order->capacity }}</div>
                                </div>
                                <div class="d-flex flex-column align-items-center ms-3 p-2">
                                    <div class="text-muted text-small">قیمت</div>
                                    <div class="text-alternate">
                                        @if($order->product_ps_price > 2)
                                            {{ number_format($order->product_ps_price) }}
                                        @else
                                            {{ number_format($order->product_price) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
        <button type="button" class="btn btn-primary">ذخیره</button>
    </div>
</div>
