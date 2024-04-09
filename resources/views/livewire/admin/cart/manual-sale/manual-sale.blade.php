<div class="row py-5">
    <div class="col-md-10 m-auto pb-5">
        @if($status == 'step1')
            <div class="card shadow-sm border-0 step1">
                <div class="card-header">
                    ساخت سبد خرید
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <label for="customerSearch" class="form-label">لطفا شماره موبایل مشتری را وارد کنید
                                <svg class="icon-svg-panel-sm"  id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#6c429a ;} </style> <g> <path class="st0" d="M341.601,0H170.399c-29.292,0-53.121,23.828-53.121,53.121v405.756c0,29.292,23.83,53.123,53.121,53.123 h171.202c29.292,0,53.121-23.83,53.121-53.119V53.121C394.722,23.828,370.893,0,341.601,0z M234.91,453.434 c0-0.536,0.452-0.988,0.988-0.988H276.1c0.536,0,0.988,0.452,0.988,0.988v13.684c0,0.536-0.452,0.988-0.988,0.988h-40.202 c-0.536,0-0.988-0.452-0.988-0.988V453.434z M277.088,429.684c0,0.536-0.452,0.988-0.988,0.988h-40.202 c-0.536,0-0.988-0.452-0.988-0.988V416c0-0.534,0.452-0.984,0.988-0.984H276.1c0.536,0,0.988,0.45,0.988,0.984V429.684z M277.088,392.25c0,0.545-0.443,0.988-0.988,0.988h-40.202c-0.546,0-0.988-0.442-0.988-0.988v-13.68 c0-0.536,0.452-0.988,0.988-0.988H276.1c0.536,0,0.988,0.452,0.988,0.988V392.25z M255.999,351.476 c-13.461,0-24.414-10.951-24.414-24.412c0-13.462,10.953-24.416,24.414-24.416c13.463,0,24.416,10.953,24.416,24.416 C280.415,340.524,269.462,351.476,255.999,351.476z M170.397,36.304h171.202c10.004,0,18.142,8.137,18.142,18.144v225.136H152.257 V54.449C152.257,44.441,160.395,36.304,170.397,36.304z M211.35,315.983v22.162h-43.742l-13.906-22.162H211.35z M203.025,429.684 c0,0.536-0.452,0.988-0.986,0.988h-40.204c-0.534,0-0.986-0.452-0.986-0.988V416c0-0.542,0.443-0.984,0.986-0.984h40.204 c0.544,0,0.986,0.443,0.986,0.984V429.684z M203.025,392.25c0,0.545-0.442,0.988-0.986,0.988h-40.204 c-0.543,0-0.986-0.442-0.986-0.988v-13.68c0-0.536,0.452-0.988,0.986-0.988h40.204c0.534,0,0.986,0.452,0.986,0.988V392.25z M160.849,467.118v-13.684c0-0.536,0.452-0.988,0.986-0.988h40.204c0.534,0,0.986,0.452,0.986,0.988v13.684 c0,0.536-0.452,0.988-0.986,0.988h-40.204C161.302,468.106,160.849,467.654,160.849,467.118z M358.295,315.983l-13.905,22.162 h-43.742v-22.162H358.295z M351.151,429.684c0,0.536-0.452,0.988-0.988,0.988h-40.202c-0.536,0-0.988-0.452-0.988-0.988V416 c0-0.542,0.443-0.984,0.988-0.984h40.202c0.546,0,0.988,0.443,0.988,0.984V429.684z M351.151,392.25 c0,0.545-0.442,0.988-0.988,0.988h-40.202c-0.545,0-0.988-0.442-0.988-0.988v-13.68c0-0.536,0.452-0.988,0.988-0.988h40.202 c0.536,0,0.988,0.452,0.988,0.988V392.25z M308.973,467.118v-13.684c0-0.536,0.452-0.988,0.988-0.988h40.202 c0.536,0,0.988,0.452,0.988,0.988v13.684c0,0.536-0.452,0.988-0.988,0.988h-40.202 C309.425,468.106,308.973,467.654,308.973,467.118z"></path> </g> </g></svg>
                            </label>
                            <div class="input-group has-validation">

                                <input type="text" class="form-control" id="customerSearch"
                                       wire:model.live="customerSearch" required wire:keydown.enter="customer_search()" placeholder="حداقل سه کاراکتر ">
                                <div class="invalid-feedback">
                                    بیش از 3 حرف وارد کنید
                                </div>
                                <span class="input-group-text" id="customer_search">
                                 <button class="btn btn-primary" wire:click.prevent="customer_search()">جستجو
                                 <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                 </button>
                             </span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                        <ul class="list-group" id="customerList">
                            @if(count($customers) > 0)
                                <label for="customerList" class="form-label py-2">لیست مشتریان:</label>
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

                            <div class="py-3">
                                <span class="small">مشتری در لیست جستجو نیست؟</span>
                                <strong class="badge rounded border border-color-runy-primary">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addCustomer">افزودن
                                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g opacity="0.4"> <path d="M18.5 19.5H14.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.5 21.5V17.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <path opacity="0.4" d="M12.1606 10.87C12.0606 10.86 11.9406 10.86 11.8306 10.87C9.45058 10.79 7.56058 8.84 7.56058 6.44C7.55058 3.99 9.54058 2 11.9906 2C14.4406 2 16.4306 3.99 16.4306 6.44C16.4306 8.84 14.5306 10.79 12.1606 10.87Z" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9891 21.8102C10.1691 21.8102 8.35906 21.3502 6.97906 20.4302C4.55906 18.8102 4.55906 16.1702 6.97906 14.5602C9.72906 12.7202 14.2391 12.7202 16.9891 14.5602" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a>
                                </strong>

                                <!-- Modal -->
                                <div class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="addCustomerLabel">اضافه کردن سریع مشتری</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <label for="name" class="form-label">نام</label>
                                                        <input type="text" class="form-control" id="name" wire:model.live="name">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="family" class="form-label">نام خانوادگی</label>
                                                        <input type="text" class="form-control" id="family" wire:model.live.blur="family">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="cellPhone" class="form-label">شماره تماس</label>
                                                        <input type="number" class="form-control" id="cellPhone" wire:model.live="cellPhone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-primary btn-lg" wire:click.prevent="addCustomer()">اضافه کن</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="py-3">
                                    <span class="small">مشتری در لیست جستجو نیست؟</span>
                                    <strong class="badge rounded border border-color-runy-primary">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#addCustomer">افزودن
                                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g opacity="0.4"> <path d="M18.5 19.5H14.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.5 21.5V17.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <path opacity="0.4" d="M12.1606 10.87C12.0606 10.86 11.9406 10.86 11.8306 10.87C9.45058 10.79 7.56058 8.84 7.56058 6.44C7.55058 3.99 9.54058 2 11.9906 2C14.4406 2 16.4306 3.99 16.4306 6.44C16.4306 8.84 14.5306 10.79 12.1606 10.87Z" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.9891 21.8102C10.1691 21.8102 8.35906 21.3502 6.97906 20.4302C4.55906 18.8102 4.55906 16.1702 6.97906 14.5602C9.72906 12.7202 14.2391 12.7202 16.9891 14.5602" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </a>
                                    </strong>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addCustomer" wire:ignore="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                @livewire('admin.cart.manual-sale.quick-add-customer' , compact('cart' , 'customerSearch'))
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-runy-success btn-sm" wire:click.prevent="step1()"
                            @if((strlen($customerSelect)>0))  @else disabled @endif>ادامه
                    </button>

                </div>
            </div>
        @elseif($status == 'step2')
            <div class="card shadow-sm my-3 step2">
                <div class="card-body d-flex justify-content-between">
                    <div class="info-customer">
                        <span>سبد خرید</span> <strong class="fw-bolder">{{ $cart->name.' '.$cart->family }}</strong>
                    </div>
                    <div class="text-left">
                        <button class="btn btn-primary">ویرایش</button>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm border-0 mb-2">
                <div class="card-body row">
                    <div class="col-1 col-sm-1 col-lg-1 my-auto">
                        <div class="profile position-relative">
                            <img class="w-70px rounded-circle border" src="{{ asset($customer->pic) }}" alt="خریدار">
                            <div class="p-1 bg-secondary bg-opacity-50 rounded text-center position-absolute" style="top:51px;width:100%;font-size:12px">خریدار</div>
                        </div>

                    </div>
                    <div class="col-11">
                        <div class="row gy-2 gx-3 align-items-center">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>نام ونام خانوادگی:</div>
                                        <div>{{ $cart->name.' '.$cart->family }}</div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>شماره تماس:</div>
                                        <div>{{ $cart->cell }}</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>کد عضویت:</div>
                                        <div>{{ $cart->id}}</div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>آدرس:</div>
                                        <div>{{ $cart->address }}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm border-0 mb-2">
                <div class="card-body row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="title">فهرست محصولات و خدمات </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addToCartManul">
                                    اضافه کردن محصول یا خدمات
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" wire:ignore="" id="addToCartManul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addToCartManulLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            @livewire('admin.cart.manual-sale.quick-add-product-to-manul-cart' , compact('cart' , 'orders'))
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">مورد</th>
                                        <th scope="col">تعداد</th>
                                        <th scope="col">مبلغ واحد</th>
                                        <th scope="col">قیمت کل</th>
                                        <th scope="col" class="w-140px text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $x=1; @endphp
                                    @foreach($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $x }}</th>
                                            <td class="d-flex justify-content-start">
                                                <img class="w-70px rounded" src="{{ asset(infoProduct($order->product_id)->pic) }}">
                                                {{ $order->product_name }}
                                            </td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->product_price }}</td>
                                            <td>{{ $order->sum }}</td>
                                            <td class="text-center">
                                                <button wire:click.prevent="deleteOrder({{ $order->id }})" class="btn mx-auto">
                                                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                                  stroke="#ff0019" stroke-width="1.5"
                                                                  stroke-linecap="round"></path>
                                                            <path
                                                                d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                                                                stroke="#ff0019" stroke-width="1.5"
                                                                stroke-linecap="round"></path>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        @php $x++; @endphp
                                    @endforeach
                                    <tr class="border-opacity-25 " >
                                        <td colspan="5" ></td>
                                        <td class="table-active border">جمع کل : <strong>{{ number_format($sum) }}</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <label class="visually-hidden" for="serviceSearch">جستجوی خدمات و محصولات</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="serviceSearch"
                                           wire:model.live="serviceSearch" placeholder="حداقل چهار حرف بنویسید">
                                    <div class="input-group-text">
                                        <button class="btn btn-sm btn-runy-outline-primary"
                                                wire:click.prevent="product_service_search()">جستجو
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top" style="max-height: 350px !important;overflow-y: scroll;">
                                <ul class="list-group list-group-flush">
                                    @foreach($services as $service)
                                        <li class="list-group-item d-flex justify-content-between"
                                            wire:key="{{ $service->id }}">
                                            <div class="service-name">
                                                {{ $service->name }}
                                            </div>
                                            <button class="btn"
                                                    wire:click.prevent="addServiceToCart({{ $service->id }})">
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
                                    <li class="list-group-item d-flex justify-content-between"
                                        wire:key="{{ $order->id }}">
                                        <div class="">
                                            <strong>#{{ $order->id }} </strong>{{ $order->product_name }} به تعداد
                                            : {{ $order->quantity }} به قیمت : {{ $order->product_price }}
                                        </div>
                                        <button wire:click.prevent="deleteOrder({{ $order->id }})" class="btn">
                                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                          stroke="#ff0019" stroke-width="1.5"
                                                          stroke-linecap="round"></path>
                                                    <path
                                                        d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                                                        stroke="#ff0019" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                </g>
                                            </svg>
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
                        سبد خرید به ارزش : {{ number_format($cart->total_price) }}
                        برای {{ $cart->name .' '.$cart->family }} ایجاد شد .<br>
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
