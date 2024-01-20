<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">

        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>{{ $cart->name }} {{ $cart->family }}</div>
                    <div class="text-small text-muted"><span>شماره سفارش:</span>{{ $cart->id }}</div>
                </div>
                <div class="d-flex">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-warning btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#showModalCart{{$cart->id}}">
                        دیدن سفارش
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


                    <div class="btn btn-outline-secondary btn-sm ms-1">وضعیت: {{ statusCart($cart->status) }}</div>
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
                </div>
            </div>
        </div>
    </div>
</div>
