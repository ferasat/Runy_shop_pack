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
                            <div class="col-sm-3 hidden-xs">
                                @if(isset($product['pic']))
                                <img src="{{ asset($product['pic']) }}" width="100" height="100" class="img-responsive"/>
                                @endif
                            </div>
                            <div class="col-sm-9">
                                <h4>{{ $product['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$product['price']}}</td>
                    <td data-th="Quantity">
                        <input type="number" name="quantity" class="w-6 text-center bg-gray-300" value="{{ $product['quantity'] }}" wire:change="updateQuantity('{{ $id }}', $event.target.value)" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $product['price'] * $product['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm" wire:click="removeFromCart('{{ $id }}')" >x</button>
                    </td>

                </tr>
                    @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5" class="text-right "><h3><strong>مجموع کل: {{$total}}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <button class="btn btn-success">Checkout</button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

