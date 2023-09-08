<div >
    <div class="product-add">
        <div class="parent-btn overflow-hidden">
            <a href="#" class="dk-btn dk-btn-info" data-bs-toggle="modal"
               data-bs-target="#staticAddToCart" wire:click.privent="addToCart({{$product->id}})">
                افزودن به سبد خرید
                <i class="now-ui-icons shopping_cart-simple"></i>
            </a>
        </div>
    </div>

    @if($product->formatProduct == 'show')
        @livewire('user.product.offline-order' , ['product'=>$product])
    @else
        @if($showModal)
            <div class="modal_runy @if( !$showModal ) d-none @endif" id="modal_runy" >
                <div class="modal_runy-content">
                    <div class="modal_runy-body">
                        <div class="card">
                            <div class="row">
                                <div class="col-2">
                                    <button class="btn btn-danger" wire:click.prevent="hiddenModal()">Close</button>
                                </div>
                            </div>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @php $productInfo = 'order-'.$product->id ; @endphp
                                @foreach(session('cart') as  $productInfo=> $details )
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row te">
                                                @if(isset($details['pic']))
                                                    <img src="{{ asset($details['pic']) }}"
                                                         class="img-responsive w-50 h-50"/>
                                                @endif
                                                <div class="col-sm-9">
                                                    <h3 class="nomargin">{{ $details['name'] }}</h3>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price" ><h3>${{ $details['price'] }}</h3></td>
                                        <td data-th="Quantity">
                                            <div class="flex items-center justify-center">
                                                <button class="btn btn-info btn-sm" wire:click="decreaseQuantity('{{ $productInfo }}')">-</button>
                                                <span class="mx-2">{{ $details['quantity'] }}</span>
                                                <button class="btn btn-info btn-sm" wire:click="increaseQuantity('{{ $productInfo }}')">+</button>
                                            </div>
                                        </td>
                                        <td data-th="Subtotal" class="text-center"><h3>{{ $details['price'] * $details['quantity'] }}</h3></td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm mt-2" wire:click="removeFromCart('{{ $productInfo }}')">x</button>
                                        </td>
                                    </tr>
                                    <br>
                                @endforeach
                                <hr>
                                <h3>جمع کل:{{$total}}</h3>
                                <a class="btn btn-success btn-sm mt-2" href="{{asset(route('cart'))}}">مشاهده سبد خرید</a>
                                <a class="btn btn-info btn-sm mt-2" href="{{asset(route('invoice'))}}">تسویه حساب</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endif
    @endif
    @if(session()->has('success_add'))  @endif


</div>
