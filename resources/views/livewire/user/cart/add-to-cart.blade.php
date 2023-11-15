<div>
    <div class="product-add">
        <div class="parent-btn overflow-hidden">
            @if($product->price == 0 or $product->price == null or $product->price == '' )
                <a href="tel:02188310838" class="dk-btn dk-btn-info"  >
                    <svg viewBox="0 0 1024 1024" class="icon-svg-panel-sm" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M845.4 383H758c-16.6 0-30-13.4-30-30s13.4-30 30-30h87.4c16.6 0 30 13.4 30 30s-13.5 30-30 30zM662.3 383H263.1c-16.6 0-30-13.4-30-30s13.4-30 30-30h399.2c16.6 0 30 13.4 30 30s-13.5 30-30 30z" fill="#fc454a"></path><path d="M433.2 873.2m-55 0a55 55 0 1 0 110 0 55 55 0 1 0-110 0Z" fill="#343a40"></path><path d="M854.5 873.2m-55 0a55 55 0 1 0 110 0 55 55 0 1 0-110 0Z" fill="#343a40"></path><path d="M889.8 722.1h-511c-37.7 0-68.4-30.7-68.4-68.4v-1.4L274.5 270v-0.2-0.2l-6-55.4c-8.6-86.8-57.6-117.5-97.3-128.1L101.5 69c-16.1-4-32.3 5.9-36.3 22s5.9 32.3 22 36.3l68.9 16.9c16.2 4.3 28.1 12.4 36.6 24.7 8.6 12.4 14 29.7 16.1 51.4l6 55.6 35.6 379.3c0.8 70.1 58.1 126.9 128.4 126.9h511c16.6 0 30-13.4 30-30s-13.4-30-30-30z" fill="#6c429a"></path><path d="M840.3 197.8H381c-16.6 0-30 13.4-30 30s13.4 30 30 30h459.3c30.2 0 54.9 24.3 55.5 54.3l-19.9 226.5-0.1 1.3v1.3c0 30.6-24.9 55.5-55.5 55.5H436c-16.6 0-30 13.4-30 30s13.4 30 30 30h384.3c63.2 0 114.7-51.1 115.5-114.1L955.7 316l0.1-1.3v-1.3c0-63.8-51.8-115.6-115.5-115.6z" fill="#6c429a"></path><path d="M408.5 842.1c7.2 0 13.1 5.9 13.1 13.1s-5.9 13.1-13.1 13.1-13.1-5.9-13.1-13.1 5.9-13.1 13.1-13.1m0-60c-40.4 0-73.1 32.7-73.1 73.1s32.7 73.1 73.1 73.1 73.1-32.7 73.1-73.1-32.7-73.1-73.1-73.1zM823.1 842.1c7.2 0 13.1 5.9 13.1 13.1s-5.9 13.1-13.1 13.1-13.1-5.9-13.1-13.1 5.9-13.1 13.1-13.1m0-60c-40.4 0-73.1 32.7-73.1 73.1s32.7 73.1 73.1 73.1 73.1-32.7 73.1-73.1-32.7-73.1-73.1-73.1z" fill="#6c429a"></path></g></svg>
                    تماس بگیرید
                </a>
            @else
                <a href="#" class="dk-btn " data-bs-toggle="modal"
                   data-bs-target="#staticAddToCart" wire:click.privent="addToCart({{$product->id}})">
                    افزودن به سبد خرید
                    <i class="now-ui-icons shopping_cart-simple"></i>
                </a>
            @endif
        </div>
    </div>

    @if($product->formatProduct == 'show')
        @livewire('user.product.offline-order' , ['product'=>$product])
    @else
        @if($showModal)
            <div class="modal_runy @if( !$showModal ) d-none @endif" id="modal_runy">
                <div class="modal_runy-content">
                    <div class="modal_runy-body">
                        <div class="card">
                            <div class="modal-header">
                                <div class="modal-title h5" id="cartModal1Label">
                                    سبد خرید شما
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        wire:click.prevent="hiddenModal()"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-image">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">محصول</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">تعداد</th>
                                        <th scope="col">قیمت کل</th>
                                        <th scope="col">عمل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @php $productInfo = 'order-'.$product->id ; @endphp
                                        @foreach(session('cart') as  $productInfo=> $details )
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr>
                                                <td class="w-25">
                                                    <img src="{{ asset('theme/img/20221105_224825_227343122.png') }}"
                                                         alt="mahsol">
                                                    @if(isset($details['pic']))
                                                        <img src="{{ asset($details['pic']) }}"
                                                             class="img-fluid img-thumbnail" alt=""/>
                                                    @endif
                                                </td>
                                                <td>{{ $details['name'] }}</td>
                                                <td data-th="Price">{{ $details['price'] }} </td>
                                                <td class="qty" data-th="Quantity">
                                                    <div class="flex items-center justify-center">
                                                        <button class="btn btn-info btn-sm"
                                                                wire:click="decreaseQuantity('{{ $productInfo }}')">-
                                                        </button>
                                                        <span class="mx-2">{{ $details['quantity'] }}</span>
                                                        <button class="btn btn-info btn-sm"
                                                                wire:click="increaseQuantity('{{ $productInfo }}')">+
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>{{ $details['price'] * $details['quantity'] }}</td>
                                                <td>
                                                    <button wire:click="removeFromCart('{{ $productInfo }}')"
                                                            class=" btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @endif
                                </table>
                                <div class="d-flex justify-content-end">
                                    <div class="h6">جمع کل: <span class="price text-success">{{$total}}</span></div>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0 d-flex justify-content-between">
                                <a class="btn btn-primary" href="{{asset(route('cart'))}}">مشاهده سبد خرید</a>
                                <button class="btn btn-info" wire:click.privent="checkout({{$total}})">تسویه حساب</button>
                                <button type="button" class="btn btn-forth">بستن</button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        @endif
    @endif
    @if(session()->has('success_add'))  @endif

</div>
