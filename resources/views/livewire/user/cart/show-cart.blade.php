<div class="main my-3 p-4">
    <div class="container ">
        <div class="row">
            <div class="col-12 py-4">
                <div class="card">
                    <div class="table-responsive">
                        <table id="cart" class="table table-hover table-condensed align-middle">
                            <thead>
                            <tr class="text-center">
                                <th class="rounded-top-3">مورد</th>
                                <th>قیمت</th>
                                <th>تعداد</th>
                                <th class="text-center">قیمت کل</th>
                                <th class="rounded-top-3"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $product)
                                    <tr>
                                        <td data-th="Product" class="d-flex justify-content-start align-items-center ">

                                            <img src="{{ asset($product['pic']) }}" class="img-responsive w-50px"/>
                                            <strong class="p-2">{{ $product['name'] }}</strong>

                                        </td>
                                        <td data-th="Price">{{ number_format($product['price']) }}</td>
                                        <td data-th="Quantity">
                                            <div class="flex items-center justify-center">
                                                <button class="btn btn-primary btn-sm"
                                                        wire:click="decreaseQuantity('{{ $id }}')">
                                                    -
                                                </button>
                                                <span class="mx-2">{{ $product['quantity'] }}</span>
                                                <button class="btn btn-primary btn-sm"
                                                        wire:click="increaseQuantity('{{ $id }}')">
                                                    +
                                                </button>
                                            </div>
                                        </td>
                                        <td data-th="Subtotal"
                                            class="text-center">{{ number_format($product['price'] * $product['quantity']) }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm"
                                                    wire:click="removeFromCart('{{ $id }}')">x
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="visually-hidden" for="autoSizingInputGroup">کد تخفیف</label>
                                <div class="input-group">
                                    <div class="input-group-text">کد تخفیف</div>
                                    <input type="text" class="form-control" wire:model.live.blur="code">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <button id="btn" class="btn btn-success" wire:click.prevent="apply({{$total}})">اعمال</button>
                            </div>

                            <div class="col-md-4">
                                <strong>مجموع کل: {{ number_format($total) }}</strong>
                                @if($dis>0)
                                    <h3><strong>مجموع کل با احتساب تخفیف: {{$dis}}</strong></h3>
                                @endif
                            </div>

                            <div class="col-md-3 d-flex justify-content-end">
                                <button class="btn btn-primary" wire:click.privent="checkout({{$total}})">تسویه حساب</button>
                                @if($badDiscount)
                                    <div class="alert alert-danger mt-3">
                                        کد تخفیف منقضی
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
