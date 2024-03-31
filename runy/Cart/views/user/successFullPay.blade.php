@extends('layouts.runyApp',['title'=>'پرداخت موفق','description'=>'پرداخت موفق'])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    <div class="container py-5 my-5">
        <div class="row py-5 my-5">
            <div class="col-6 mx-auto ">
                <h1>پرداخت شما موفق بوده است </h1>
                <div class="row border rounded p-3">
                    <div class="col-6">
                        <div class="d-block">به نام : {{ $cart->name.' '.$cart->family }}</div>
                        <div class="d-block">شماره تماس : {{ $cart->cell }}</div>
                    </div>
                    <div class="col-6 text-left">
                        <div class="d-block">شماره سفارش شما  : {{ $cart->id }}</div>
                        <div class="d-block">شماره صورتحساب  : {{ $invoice->id }}</div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">لیست اقلام خریداری شده</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($orders as $order)
                            <li class="list-group-item">{{ $order->product_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="my-4">
                    <a href="{{ asset('/user/dashboard') }}" class="btn btn-info w-100px" >پیشخوان</a>
                </div>

            </div>
        </div>
    </div>

    @livewire('user.theme.user-footer')

@endsection
