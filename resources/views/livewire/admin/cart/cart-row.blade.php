<tr wire:id="{{ $cart->id }}">
    <th scope="row">
        @if($cart->type_cart == 'سامانه تعمیرات')
            <a target="_blank" href="{{ asset('/dashboard/rqsts/show/'.cart_to_rqst($cart->id)) }}" class="btn btn-outline-warning btn-sm ms-1">{{$cart->id}}</a>
        @else
            <button type="button" class="btn btn-outline-warning btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#showModalCart{{$cart->id}}">
                {{$cart->id}}
            </button>
            <!-- Modal -->
            <div class="modal fade" id="showModalCart{{$cart->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="showModalCart{{$cart->id}}Label" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="showModalCart{{$cart->id}}Label">{{ $cart->name }} {{ $cart->family }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        @livewire('admin.cart.show-cart' , ['cart'=>$cart] , key($cart->id))

                    </div>
                </div>
            </div>
        @endif
    </th>
    <td>
        @if($cart->type_cart == 'سامانه تعمیرات')
            <a target="_blank" href="{{ asset('/dashboard/rqsts/show/'.cart_to_rqst($cart->id)) }}" class="btn btn-sm ms-1">{{ $cart->name .' '.$cart->family }}<br>{{$cart->cell}}</a>
        @else
            <button type="button" class="btn btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#showModalCart{{$cart->id}}">
                {{ $cart->name .' '.$cart->family }}<br>{{$cart->cell}}
            </button>
        @endif
    </td>
    <td>{{ verta($cart->created_at)->format('%d %B %Y , H:i') }}</td>
    <td>{{ statusCart($cart->status) }}</td>
    <td>{{ number_format($cart->total_price) }}</td>
    <td>
        @if(statusCart($cart->status) == 'پرداخت موفق') @endif
        {{ statusCart($cart->status) }}</td>
    <td>
        <button class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{$cart->id}}">حذف</button>
        <div class="modal fade" id="deleteModal{{$cart->id}}" tabindex="-1" aria-labelledby="deleteModal{{$cart->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModal{{$cart->id}}Label">حذف  سفارش {{ $cart->name }} {{ $cart->family }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ایا مطمئن هستید ؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                        <a class="btn btn-danger btn-sm ms-1" href="{{ asset('/dashboard/cart/delete/'.$cart->id) }}" >حذف</a>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
