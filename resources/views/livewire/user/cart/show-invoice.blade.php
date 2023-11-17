<div class="mt-5">
    <div class="row p-4">
        <div class="col-6 ">
            <div class="card ">
                <div class="card-header">
                    <h3>جزئیات صورت حساب</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">نام</label>
                            <input type="text" class="form-control" name="name" id="name" wire:model.live.blur="name">
                        </div>
                        <div class="form-group col-6">
                            <label for="last_name">نام خانوادگی</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" wire:model.live.blur="family">
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="form-group col-6">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control " id="email" wire:model.live.blur="email">
                        </div>
                        <div class="form-group col-6">
                            <label for="cellPhone">شماره تلفن</label>
                            <input type="text" class="form-control " name="tel" id="cellPhone" wire:model.live.blur="cellPhone">
                        </div>

                    </div>


                    <div class="row my-2">
                        <div class="form-group col-6">
                            <label for="zip_code">کدپستی</label>
                            <input type="text" class="form-control " id="zip_code" wire:model.live.blur="zip_code">
                        </div>


                    </div>


                    <div class="form-group">
                        <label for="address">آدرس</label>
                        <input type="text" class="form-control" name="address" id="address" wire:model.live.blur="address">
                    </div>

                {{--                    <div class="row my-2">--}}
                {{--                        <div class="form-group col-6">--}}
                {{--                            <label for="codeposti">کد پستی</label>--}}
                {{--                            <input type="text" class="form-control" name="code_posti" id="codeposti" wire:model.live.blur="codeposti">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                </div>

            </div>

        </div>
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <h3>سفارش شما</h3>
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
                                @foreach($orders as $order)
                                    <tr>
                                        <td>
                                            <span>{{$order->quantity}}	×</span>
                                            <span>{{$order->product_name}}</span>
                                        </td>
                                        <td>{{$order->sum}}</td>


                                    </tr>
                                @endforeach

                            <tr>
                                <td>
                                    <span>جمع کل</span>
                                </td>
                                <td>{{$cart->total_price}}</td>


                            </tr>
                            <tr>
                                <td>
                                    <span>جمع کل با احتساب تخفیف</span>
                                </td>
                                <td>{{$cart->discounted_total_price}}</td>
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
                    <button class="btn btn-dark" wire:click.prevent="pay_invoice()">ثبت سفارش</button>
                </div>
            </div>
        </div>
    </div>
</div>
