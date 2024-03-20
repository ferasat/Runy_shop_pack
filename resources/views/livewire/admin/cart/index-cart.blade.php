<section class="scroll-section" id="listCarts">
    <div class="card ">
        <div class="card-header">آخرین سفارشات</div>
        <div class="card-body mb-n2  ">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">مشتری</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">صورت حساب</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carts as $cart)
                    @livewire('admin.cart.cart-row' , ['cart' => $cart]  , key($cart->id))
                @endforeach

                </tbody>
            </table>



        </div>
        <div class="card-footer">{{ $carts->links() }}</div>
    </div>
</section>
