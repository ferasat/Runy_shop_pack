@extends('layouts.runyApp',['title'=>'اضافه کردن سبد خرید','description'=>'سبد خرید'])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <div class="row">
                <div class="col-8 m-auto mt-3">
                    <div class="h4">اضافه کردن دستی سبد خرید</div>
                </div>
            </div>
            <!-- Content Start -->
            @livewire('admin.cart.add-cart' , ['cart'=>$cart] )
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
