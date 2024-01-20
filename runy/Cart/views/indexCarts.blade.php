@extends('layouts.runyApp',['title'=>'سفارشات','description'=>'سفارشات'])
@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Content Start -->
                <div class="row mt-4">
                    <div class="col-xl-8 mb-5">
                        @livewire('admin.cart.index-cart')
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="card ">
                            <div class="card-header">دسترسی ها</div>
                            <div class="card-body mb-n2 border-last-none">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="{{asset(route('create.cart'))}}">ساخت صورت حساب
                                            دستی</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
