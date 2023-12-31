@extends('layouts.runyApp',['title'=>'محصولات','description'=>'محصولات'])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/horizontal.js') }}"></script>
@endsection

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>

                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <div class="">
                <div class=" d-flex justify-content-between">
                    <div class="btnS">
                        <button class="btn btn-background-alternate mt-n2 shadow">
                            در خواست ها:
                            <span class="badge bg-danger">0</span>
                        </button>
                        <button class="btn btn-background-alternate mt-n2 shadow">
                            سفارش:
                            <span class="badge bg-danger">0</span>
                        </button>
                    </div>
                    <button class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                             class="cs-icon cs-icon-more-horizontal">
                            <path
                                d="M9 10C9 9.44772 9.44772 9 10 9V9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10zM2 10C2 9.44772 2.44772 9 3 9V9C3.55228 9 4 9.44772 4 10V10C4 10.5523 3.55228 11 3 11V11C2.44772 11 2 10.5523 2 10V10zM16 10C16 9.44772 16.4477 9 17 9V9C17.5523 9 18 9.44772 18 10V10C18 10.5523 17.5523 11 17 11V11C16.4477 11 16 10.5523 16 10V10z"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow" style="">
                        <a class="dropdown-item" href="{{ asset(route('post.Create')) }}">نوشته جدید</a>
                        <a class="dropdown-item" href="{{ asset(route('post.index')) }}">نوشته های برای بررسی</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>

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

            </div>

            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
