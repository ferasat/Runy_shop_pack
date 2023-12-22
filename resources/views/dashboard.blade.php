@extends('layouts.runyApp' , ['title'=>'پیشخوان'])
@section('content')

    <!-- responsive-header -->

    <div class="wrapper ">
        @if(Auth::check() and Auth::user()->levelPermission > 2)
            @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        @else
            @livewire('user.dashboard.user-cp-header')
        @endif

        <main class="dashboard-user-page ">
            @if(Auth::user()->levelPermission > 2)
            <div class="container mt-5">
                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header"> سفارشات</div>
                                    <div class="card-body">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1"><span>شفارشات جدید :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>شفارشات در حال اجرا :</span> <div class="badge bg-warning">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>شفارشات انجام شده : </span><div class="badge bg-success">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>شفارشات لغو شده : </span><div class="badge bg-secondary">1 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header">در خواست خدمات</div>
                                    <div class="card-body">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1"><span>درخواست جدید :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>درخواست در حال اجرا :</span> <div class="badge bg-warning">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>درخواست انجام شده : </span><div class="badge bg-success">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1"><span>درخواست لغو شده : </span><div class="badge bg-secondary">1 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header">باشگاه مشتریان</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
                        <div class="profile-box">
                            <div class="profile-box-header bg-runy-primary">
                                <div class="profile-box-avatar">
                                    <img src="{{ asset(Auth::user()->pic) }}" alt="{{ fullName(Auth::user()->id) }}">
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#myProfile" class="profile-box-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <!-- Modal Core -->
                                <div class="modal-share modal-width-custom modal fade" id="myProfile" tabindex="-1"
                                     role="dialog" aria-labelledby="myProfileLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                                <h4 class="modal-title" id="myProfileLabel">تغییر نمایه کاربری شما</h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="profile-avatars default text-center">
                                                    <li>
                                                        <img class="profile-avatars-item"
                                                             src="{{ asset(Auth::user()->pic) }}">
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Core -->
                            </div>
                            <div class="profile-box-username">{{ fullName(Auth::user()->id) }}</div>
<!--                            <div class="d-flex justify-content-between">

                                <form class=" w-50" action="{{ asset(route('logout')) }}" method="post" >
                                    @csrf
                                    <button type="submit" class="btn btn-danger w-100" style="font-size: 18px !important;">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M12 2V6" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8.5 3.70605C5.26806 5.07157 3 8.27099 3 12.0001C3 16.9707 7.02944 21.0001 12 21.0001C16.9706 21.0001 21 16.9707 21 12.0001C21 8.27099 18.7319 5.07157 15.5 3.70605" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>

                                    </button>
                                </form>
                            </div>-->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="{{ asset(route('setting.index')) }}">
                                            <i class="fa fa-navicon"></i>
                                            تنظیمات عمومی
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ asset( route('setting.home')) }}">
                                            <i class="fa fa-navicon"></i>
                                            تنظیمات صفحه اول
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ asset( route('runy_seo')) }}">
                                            <i class="fa fa-navicon"></i>
                                            تنظیمات سئو
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ asset( route('sms_setting')) }}">
                                            <i class="fa fa-navicon"></i>
                                            تنظیمات سامانه پیامک
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ asset( route('customer.setting')) }}">
                                            <i class="fa fa-navicon"></i>
                                            تنظیمات باشگاه مشتریان
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @else
                <div class="d-flex justify-content-center">
                <h1>در حال بروزرسانی هستیم  . از صبر شما متشکریم .</h1>
                <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
                    <div class="profile-box">
                        <div class="profile-box-header bg-runy-primary">
                            <div class="profile-box-avatar">
                                <img src="{{ asset(Auth::user()->pic) }}" alt="{{ fullName(Auth::user()->id) }}">
                            </div>
                            <button data-bs-toggle="modal" data-bs-target="#myProfile" class="profile-box-btn-edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <!-- Modal Core -->
                            <div class="modal-share modal-width-custom modal fade" id="myProfile" tabindex="-1"
                                 role="dialog" aria-labelledby="myProfileLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h4 class="modal-title" id="myProfileLabel">تغییر نمایه کاربری شما</h4>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="profile-avatars default text-center">
                                                <li>
                                                    <img class="profile-avatars-item"
                                                         src="{{ asset(Auth::user()->pic) }}">
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Core -->
                        </div>
                        <div class="profile-box-username">{{ fullName(Auth::user()->id) }}</div>

                    </div>


                </div>
                </div>
            @endif
        </main>
    </div>

    @if(Auth::check() and Auth::user()->levelPermission > 2)
        @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
    @else
        @livewire('user.dashboard.user-footer-dashboard')
    @endif

@endsection
