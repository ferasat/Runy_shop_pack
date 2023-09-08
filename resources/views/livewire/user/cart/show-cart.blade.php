<div class="main my-3 p-4">
    <div class="container-fluid mt-6">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr class="text-center">
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @if(session('cart'))
                @foreach(session('cart') as $id => $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                {{-- <img src="{{ asset($product['pic']) }}" width="100" height="100" class="img-responsive"/> --}}
                                <div class="col-sm-3 hidden-xs">
                                    @if(isset($product['pic']))
                                    @endif
                                </div>
                                <div class="col-sm-9">
                                    <h4>{{ $product['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ $product['price'] }}</td>
                        <td data-th="Quantity">
                            <div class="flex items-center justify-center">
                                <button class="btn btn-primary btn-sm" wire:click="decreaseQuantity('{{ $id }}')">-</button>
                                <span class="mx-2">{{ $product['quantity'] }}</span>
                                <button class="btn btn-primary btn-sm" wire:click="increaseQuantity('{{ $id }}')">+</button>
                            </div>
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $product['price'] * $product['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm" wire:click="removeFromCart('{{ $id }}')">x</button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="code" class="form-label">کد تخفیف</label>
                        <input type="text" class="form-control" wire:model.lazy="code">
                    </div>
                    <div class="col-md-4">
                        <button id="btn" class="btn btn-success" wire:click.prevent="apply({{$total}})">اعمال</button>
                    </div>

                </div>



                <h3><strong>مجموع کل: {{$total}}</strong></h3>
                @if($dis>0)
                        <h3><strong>مجموع کل با احتساب تخفیف: {{$dis}}</strong></h3>
                @endif
                <button class="btn btn-success" wire:click.privent="checkout({{$total}})">Checkout</button>
                @if($badDiscount)
                    <div class="alert alert-danger mt-3">
                        کد تخفیف منقضی
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
