<div class="card">
    <div class="card-header">فهرست سفارشات</div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($carts as $cart)
                <li class="list-group-item d-flex justify-content-between align-items-start runy-hover-list">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold d-flex justify-content-start">
                            <div class="border rounded p-1 {{ statusCartColor($cart->status) }}">سفارش : {{ $cart->id }}</div>
                            <div class="ms-3"> {{ verta($cart->created_at)->format('%d %B %Y') }}</div>
                        </div>
                        {{ number_format($cart->total_price) .' '.$default_currency }}
                    </div>
                    <span
                        class="badge {{ statusCartColor($cart->status) }} rounded-pill">{{ statusCart($cart->status) }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="card-footer text-center">
        {{ $carts->links() }}
    </div>
</div>
