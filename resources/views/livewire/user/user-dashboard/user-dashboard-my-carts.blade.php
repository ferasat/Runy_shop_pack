<div class="card">
    <div class="card-header">فهرست سفارشات</div>
    <div class="card-body">
        <ul>
            @foreach($carts as $cart)
            <li>سبد خرید شماره :{{ $cart->id }}</li>
            @endforeach
        </ul>
    </div>
    <div class="card-footer text-center">
        {{ $carts->links() }}
    </div>
</div>
