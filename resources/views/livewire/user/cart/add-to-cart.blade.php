<div>
    <div class="product-add">
        <div class="parent-btn overflow-hidden">
            @if($product->price == 0 or $product->price == null )
                <a href="tel:02188310838" class="dk-btn dk-btn-info" data-bs-toggle="modal"
                   data-bs-target="#staticAddToCart" >
                    تماس بگیرید
                    <i class="now-ui-icons shopping_cart-simple"></i>
                </a>
            @else
                <a href="#" class="dk-btn dk-btn-info" data-bs-toggle="modal"
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
