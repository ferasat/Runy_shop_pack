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
        <div class="profile-box-tabs">
            <a href="#" class="profile-box-tab profile-box-tab-access">
                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                تغییر رمز
            </a>
            <form action="{{ asset(route('logout')) }}" method="post" class="d-inline">
                @csrf
                <button type="submit" class="profile-box-tab profile-box-tab--sign-out">
                    <i class="now-ui-icons media-1_button-power"></i>
                    خروج از حساب
                </button>
            </form>
        </div>
    </div>
    <div class="responsive-profile-menu show-md">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-runy-primary dropdown-toggle w-100" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
            دسترسی سریع
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="profile-menu hidden-md">
        <div class="profile-menu-header">حساب کاربری شما</div>
        <ul class="profile-menu-items">
            <li>

                <a href="{{ asset(route('setting.index')) }}">
                    <i class="fa fa-navicon"></i>
                    تنظیمات عمومی
                </a>
            </li>
            <li>
                <a href="{{ asset( route('setting.home')) }}">
                    <i class="fa fa-navicon"></i>
                    تنظیمات صفحه اول
                </a>
            </li>
            <li>
                <a href="{{ asset( route('runy_seo')) }}" >
                    <i class="fa fa-navicon"></i>
                    تنظیمات سئو
                </a>
            </li>
            <li>
                <a href="{{ asset( route('sms_setting')) }}">
                    <i class="fa fa-navicon"></i>
                    تنظیمات سامانه پیامک
                </a>
            </li>
            <li>
                <a href="{{ asset( route('customer.setting')) }}">
                    <i class="fa fa-navicon"></i>
                    تنظیمات باشگاه مشتریان
                </a>
            </li>
        </ul>
    </div>
</div>
