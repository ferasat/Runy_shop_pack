<div class="row py-5">
    <div class="col-md-8 m-auto ">
        @if($status == 'step1')
            <div class="card shadow-sm border-0 step1">
                <div class="card-header">
                    مشخصات مشتری
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="customerSearch" class="form-label">نام و یا تلفن مشتری را وارد کنید</label>
                            <div class="input-group has-validation">

                                <input type="text" class="form-control" id="customerSearch"
                                       wire:model.live="customerSearch" required>
                                <div class="invalid-feedback">
                                    بیش از 3 حرف وارد کنید
                                </div>
                                <span class="input-group-text" id="customer_search">
                                 <button class="btn btn-runy-outline-primary" wire:click.prevent="customer_search()">جستجو</button>
                             </span>
                            </div>
                        </div>
                        <ul class="list-group col-md-6" id="customerList">
                            <label for="customerList" class="form-label">لیست مشتریان</label>
                            @foreach($customers as $customer)
                                <li class="list-group-item" wire:key="{{$customer->id}}">
                                    <input class="form-check-input" type="radio" name="customerSelect"
                                           value="{{$customer->id}}" wire:model.live="customerSelect"
                                           id="{{$customer->id}}">
                                    <label class="form-check-label" for="{{$customer->id}}">
                                        {{ $customer->name.' '.$customer->family .' '.$customer->cell }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-runy-success btn-sm" wire:click.prevent="step1()"
                            @if((strlen($customerSelect)>0))  @else disabled @endif>ادامه
                    </button>
                    @if((strlen($customerSelect)>0)) @else
                        <p class="text-danger">هنوز مشتری انتخاب نکردید</p>
                    @endif
                </div>
            </div>
        @elseif($status == 'step2')
            <div class="card shadow-sm border-0 step2">
                <div class="card-header">افزودن کالا و خدمات به سبد خرید
                    <strong>{{ $cart->name.' '.$cart->family }}</strong></div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">اضافه کردن خدمات</div>
                            <div class="card-body">
                                <label class="visually-hidden" for="serviceSearch">جستجوی خدمات</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="serviceSearch"
                                           wire:model.live="serviceSearch" placeholder="سه حرف بنویسید">
                                    <div class="input-group-text">
                                        <button class="btn btn-sm btn-runy-outline-primary"
                                                wire:click.prevent="service_search()">جستجو
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top" style="max-height: 350px !important;overflow-y: scroll;">
                                <ul class="list-group list-group-flush">
                                    @foreach($services as $service)
                                        <li class="list-group-item d-flex justify-content-between" wire:key="{{ $service->id }}">
                                            <div class="service-name">
                                                {{ $service->name }}
                                            </div>
                                            <button class="btn" wire:click.prevent="addServiceToCart({{ $service->id }})">
                                                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                                            stroke="#6c429a" stroke-width="1.5"></path>
                                                        <path
                                                            d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                                            stroke="#6c429a" stroke-width="1.5"></path>
                                                        <path d="M13 13V11M13 11V9M13 11H15M13 11H11" stroke="#6c429a"
                                                              stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7"
                                                            stroke="#6c429a" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">اضافه کردن محصول</div>
                            <div class="card-body">
                                <label class="visually-hidden" for="productSearch">جستجوی محصول</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productSearch"
                                           wire:model.live="productSearch" placeholder="سه حرف بنویسید">
                                    <div class="input-group-text">
                                        <button class="btn btn-sm btn-runy-outline-primary"
                                                wire:click.prevent="product_search()">جستجو
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top" style="max-height: 350px !important;overflow-y: scroll;">
                                <ul class="list-group list-group-flush">
                                    @foreach($products as $product)
                                        <li class="list-group-item d-flex justify-content-between" wire:key="{{ $product->id }}">
                                            <div class="product-name">
                                                {{ $product->name }}
                                            </div>
                                            <button class="btn"
                                                    wire:click.prevent="addProductToCart({{ $product->id }})">
                                                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                                            stroke="#6c429a" stroke-width="1.5"></path>
                                                        <path
                                                            d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                                            stroke="#6c429a" stroke-width="1.5"></path>
                                                        <path d="M13 13V11M13 11V9M13 11H15M13 11H11" stroke="#6c429a"
                                                              stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7"
                                                            stroke="#6c429a" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-4">
                        <div class="card">
                            <div class="card-header">لیست سفارشات سبد خرید</div>
                            <ol class="list-group list-group-flush">
                                @foreach($orders as $order)
                                <li class="list-group-item d-flex justify-content-between" wire:key="{{ $order->id }}">
                                    <div class="">
                                        <strong>#{{ $order->id }} </strong>{{ $order->product_name }} به تعداد : {{ $order->quantity }} به قیمت : {{ $order->product_price }}
                                    </div>
                                    <button wire:click.prevent="deleteOrder({{ $order->id }})" class="btn">
                                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#ff0019" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#ff0019" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                    </button>
                                </li>
                                @endforeach
                            </ol>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-runy-success btn-sm" wire:click.prevent="step2()">ادامه
                    </button>
                </div>
            </div>
        @elseif($status == 'step3')
            <div class="card shadow-sm border-0 step3">
                <div class="card-body">
                    <div class="title bg-info rounded p-3">
                        سبد خرید به ارزش : {{ number_format($cart->total_price) }} برای {{ $cart->name .' '.$cart->family }} ایجاد شد .<br>
                        شناسه سبد خرید : <strong> {{ $cart->id }}</strong>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ asset(route('index.carts')) }}" class="btn btn-runy-success">
                         سفارشات
                    </a>
                </div>
            </div>
        @endif


    </div>
</div>
