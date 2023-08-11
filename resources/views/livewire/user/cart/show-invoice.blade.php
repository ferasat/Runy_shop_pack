<div class="mt-5">
    <div class="row p-4">
        <div class="col-6 ">
            <div class="card ">
                <div class="card-header">
                    <h1>جزئیات صورت حساب</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">نام</label>
                            <input type="text" class="form-control" name="name" id="name" wire:model.lazy="name">
                        </div>
                        <div class="form-group col-6">
                            <label for="last_name">نام خانوادگی</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" wire:model.lazy="family">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="form-group col-6">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control " id="email" wire:model.lazy="email">
                        </div>
                        <div class="form-group col-6">
                            <label for="cellPhone">شماره تلفن</label>
                            <input type="text" class="form-control " name="tel" id="cellPhone" wire:model.lazy="cellPhone">
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="address">آدرس</label>
                        <input type="text" class="form-control" name="address" id="address" wire:model.lazy="address">
                    </div>

{{--                    <div class="row my-2">--}}
{{--                        <div class="form-group col-6">--}}
{{--                            <label for="codeposti">کد پستی</label>--}}
{{--                            <input type="text" class="form-control" name="code_posti" id="codeposti" wire:model.lazy="codeposti">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>

        </div>
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <h1>سفارش شما</h1>
                </div>
                <div class="card-body">
                    <div class="row m-2">
                        <table class="table">
                            <thead>
                            <tr class="text-secondary">
                                <th scope="col ">محصول</th>

                                <th scope="col">جمع جزء</th>

                            </tr>
                            </thead>
                            <tbody>

                            @if(session('cart'))
                                @php $total=0 @endphp
                                @foreach(session('cart') as $id => $product)
                                    @php $total += $product['subtotal'] @endphp
                            <tr>
                                <td>
                                    <span>{{$product['quantity']}}	×</span>
                                    <span>{{$product['name']}}</span>
                                </td>
                                <td>{{$product['subtotal']}}</td>


                            </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td>
                                    <span>جمع کل</span>
                                </td>
                                <td>{{$total}}</td>

                            </tr>
                            <tr>
                                <td>
                                    <span>نوع پرداخت</span>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option value="">کارت به کارت</option>
                                        <option value="">درگاه بانکی</option>
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span>حمل و نقل</span>
                                </td>
                                <td><select class="form-control">
                                        <option value="">سفارشی</option>
                                        <option value="">معمولی</option>
                                    </select></td>

                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-dark" wire:click.privent="order()">ثبت سفارش</button>
                </div>
            </div>
        </div>
    </div>
</div>
