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

                            @foreach($cart as  $order )
                                <tr>
                                    <td class="w-25">
                                        <img src="{{ asset($order['pic']) }}" class="img-fluid img-thumbnail" alt=""/>
                                    </td>
                                    <td>{{ $order['name'] }}</td>
                                    <td data-th="Price">{{ $order['price'] }} </td>
                                    <td class="qty" data-th="Quantity">
                                        <div class="flex items-center justify-center">

                                            <span class="mx-2">{{ $order['quantity'] }}</span>

                                        </div>
                                    </td>
                                    <td>{{ $order['price'] * $order['quantity'] }}</td>
                                    <td>
                                        <button wire:click="removeFromCart('{{ $order['product_id'] }}')"
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
                        <div class="h6">جمع کل: <span class="price text-success">{{ $total }}</span></div>
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
