<div class="col-xl-3 col-lg-4 col-md-6 order-1">
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
        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-warning p-2"  style="font-size: 18px !important;">
                تغییر رمز
            </a>
            <form action="{{ asset(route('logout')) }}" method="post" >
                @csrf
                <button type="submit" class="btn btn-danger" style="font-size: 18px !important;">
                    خروج از حساب
                </button>
            </form>
        </div>
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
