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
            <div class="container mt-5">
                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0 bg-runy-primary-g">
                                    تعداد سفارش محصول

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-runy-primary">
                                    باشگاه مشتریان
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
                                <button data-bs-toggle="modal" data-bs-target="#myModal" class="profile-box-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <!-- Modal Core -->
                                <div class="modal-share modal-width-custom modal fade" id="myModal" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">تغییر نمایه کاربری شما</h4>
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
                            <div class="profile-box-tabs">
                                <a href="password-change.html" class="profile-box-tab profile-box-tab-access">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                    تغییر رمز
                                </a>
                                <a href="{{ asset(route('logout')) }}" class="profile-box-tab profile-box-tab--sign-out">
                                    <i class="now-ui-icons media-1_button-power"></i>
                                    خروج از حساب
                                </a>
                            </div>
                        </div>
                        <div class="responsive-profile-menu show-md">

                            <div class="dropdown">
                                <button class="btn btn-runy-primary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-navicon"></i>
                                    دسترسی سریع
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li>
                                        <a class="dropdown-item dropdown-item-runy active " href="#">
                                            <i class="now-ui-icons business_badge"></i>
                                            فروش جدید
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-item-runy" href="#">
                                            <i class="now-ui-icons shopping_basket"></i>
                                            سرویس جدید
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-item-runy" href="#">
                                            <i class="now-ui-icons files_single-copy-04"></i>
                                            مرجوعی
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-runy" href="#">در گاه بانکی</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile-menu hidden-md">
                            <div class="profile-menu-header">حساب کاربری شما</div>
                            <ul class="profile-menu-items">
                                <li>
                                    <i class="fa fa-navicon"></i>
                                    <a href="#">
                                        <i class="now-ui-icons users_single-02"></i>
                                        فروش جدید
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="now-ui-icons shopping_basket"></i>
                                        سرویس جدید
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="active">
                                        <i class="now-ui-icons files_single-copy-04"></i>
                                        درخواست مرجوعی
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                        سرویس پیامک
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="now-ui-icons business_badge"></i>
                                        باشگاه مشتریان
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @if(Auth::check() and Auth::user()->levelPermission > 2)
        @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
    @else
        @livewire('user.dashboard.user-footer-dashboard')
    @endif

@endsection
