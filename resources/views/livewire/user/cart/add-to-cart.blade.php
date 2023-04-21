<div >
    <button type="button" class="btn btn-outline-primary btn-icon-end w-100 w-sm-auto" data-bs-toggle="modal"
            data-bs-target="#staticAddToCart" wire:click.privent="addToCart({{$product->id}})">
        خرید
        <i data-cs-icon="cart"></i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticAddToCart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticAddToCartLabel" aria-hidden="true" wire:ignore>
        <div class="modal-dialog" >
            @if($product->formatProduct == 'show')
                @livewire('user.product.offline-order' , ['product'=>$product])
            @else
                {{--@livewire('user.product.online-order' , ['product'=>$product])--}}
                <div class="card">
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @php $productInfo = 'order-'.$product->id ; @endphp
                        @foreach(session('cart') as  $productInfo=> $details )
                                <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="{{ asset($details['pic']) }}" width="100" height="100" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">${{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                </td>
                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $product }}"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $product }}"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </div>
            @endif
        </div>
    </div>
    @if(session()->has('success_add'))  @endif
</div>
