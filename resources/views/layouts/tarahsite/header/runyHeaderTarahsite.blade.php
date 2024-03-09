<!-- header -->
@livewire('user.theme.banner-top')

<!-- responsive-header -->
@livewire('user.theme.mobile-header')
@livewire('user.theme.tablet-header')

<!-- responsive-header -->


<!-- header -->
<header class="main-header bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-2 col-3 d-flex flex-row-reverse align-items-center">

                <a href="{{ asset('/') }}" class="logo-area ">
                    <img class="w-100" src="{{ asset(setting_site()->site_logo) }}" alt="{{ setting_site()->site_name }}">
                </a>

            </div>
            <div class="col-lg-6 col-md-5 col-sm-8 col-7 d-flex align-items-center">
                @livewire('user.theme.search.product-search')
            </div>
            <div class="col-md-5 d-flex flex-row-reverse align-items-center">
                @livewire('user.theme.cart-header' )
                <button class="border border-2 p-2 rounded m-2"  data-bs-toggle="modal" data-bs-target="#staticModelLogin">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <img class="icon-svg-panel-sm rounded-circle" src="{{ asset(Auth::user()->pic) }}" alt="کاربر">
                        {{ fullName(Auth::id()) }}
                    @else
                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M18.1394 21.6198C17.2594 21.8798 16.2194 21.9998 14.9994 21.9998H8.99937C7.77937 21.9998 6.73937 21.8798 5.85938 21.6198C6.07937 19.0198 8.74937 16.9697 11.9994 16.9697C15.2494 16.9697 17.9194 19.0198 18.1394 21.6198Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M22 9V15C22 18.78 20.86 20.85 18.14 21.62C17.26 21.88 16.22 22 15 22H9C7.78 22 6.74 21.88 5.86 21.62C3.14 20.85 2 18.78 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M15.5799 10.58C15.5799 12.56 13.9799 14.17 11.9999 14.17C10.0199 14.17 8.41992 12.56 8.41992 10.58C8.41992 8.60002 10.0199 7 11.9999 7C13.9799 7 15.5799 8.60002 15.5799 10.58Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        ورود | ثبت نام
                    @endif

                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticModelLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModelLoginLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if(Auth::check())
                                    <div class="d-flex justify-content-between">
                                        <div class="ps-2">
                                            <div class="textName">{{ fullName(Auth::id()) }}</div>
                                            <span class="smaller-Text">خوش آمدید</span>
                                        </div>
                                        <div class="w-50px">
                                            <img class="w-100 rounded-circle" src="{{ asset(Auth::user()->pic) }}">
                                        </div>
                                    </div>
                                    @if(Auth::user()->levelPermission > 2)
                                        <div class="row">
                                            <div class="col-12">
                                                <ol class="list-group">
                                                    <li class="list-group-item">
                                                        <a href="{{ asset('/home') }}">پیشخوان</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="{{ asset('/dashboard/carts') }}">سفارشات</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="{{ asset('/dashboard/customer/index') }}">باشگاه مشتریان</a>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    @endif
                                @else

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item w-50" role="presentation">
                                            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ورود</button>
                                        </li>
                                        <li class="nav-item w-50" role="presentation">
                                            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">ثبت نام</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                            <form id="loginForm" class="tooltip-end-bottom" novalidate="novalidate" action="{{ asset('/login') }}" method="post">
                                                @csrf
                                                <div class="mb-3 filled form-group tooltip-end-top">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-email"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                                                    <input class="form-control pe-7" placeholder="ایمیل" name="email" aria-describedby="email-error" aria-invalid="true">
                                                    @error('email')<div id="email-error" class="error">This field is required.</div>@enderror
                                                </div>
                                                <div class="mb-3 filled form-group tooltip-end-top">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-lock-off"><path d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path><path d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path></svg>
                                                    <input class="form-control pe-7" name="password" type="password" placeholder="رمز">
                                                    <a class="text-small position-absolute t-3 s-3" href="">فراموش کردی؟</a>
                                                </div>
                                                <button type="submit" class="btn btn-lg btn-primary">ورود</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                            @livewire('user.auth.register')
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-boarder-bottom shadow-sm bg-white">
        <div class="container">
            <ul class="list d-flex justify-content-center   ">
                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                    <a class="nav-link text-black">
                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M20 7L4 7" stroke="#343a40" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                                <path opacity="0.5" d="M20 12L4 12" stroke="#343a40" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                                <path d="M20 17L4 17" stroke="#343a40" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                            </g>
                        </svg>
                        خدمات
                    </a>
                    @livewire('user.theme.menu.mega-sub-menu')
                </li>
                <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                    <a class="nav-link">نمونه کارها</a>
                    <ul class="sub-menu nav">
                        <li class="list-item list-item-has-children">
                            <ol class="list-group ">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="">
                                        <a href="https://mortazavistore.ir/product-category/stock-product"
                                           class="fw-bold text-danger">
                                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1"> <g id="导航图标" transform="translate(-325.000000, -80.000000)"> <g id="编组" transform="translate(325.000000, 80.000000)"> <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon> <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="#fc454a" stroke-linejoin="round" stroke-width="1.5"></polygon> <line id="路径" stroke="#fc454a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#fc454a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line> <line id="路径" stroke="#fc454a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#fc454a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line> </g> </g> </g> </g></svg>
                                            کالای استوک
                                        </a>
                                        <ul class="list-group">
                                            <li class="list-item ">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Stock-printer">
                                                    پرنتر استوک
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Stock-copier">
                                                    دستگاه کپی استوک
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Label-printer-stock">
                                                    لیبل پرینتر استوک
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Stock-barcode-reader">
                                                    بارکدخوان استوک
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Receipt-printer-is-working">
                                                    فیش پرینتر کارکرده
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link"
                                                   href="https://mortazavistore.ir/product-category/Stock-printer-mobile">
                                                    موبایل پرینتر استوک
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="badge bg-primary rounded-pill"></span>
                                </li>
                            </ol>
                        </li>


                    </ul>
                </li>

                <li class="list-item">
                    <a class="nav-link"
                       href="https://mortazavistore.ir/post-category/Driver-Download">
                          نرم افزارها
                    </a>
                </li>
                <li class="list-item">
                    <a class="nav-link"
                       href="https://mortazavistore.ir/post-category/learn">آموزش</a>
                </li>
                <li class="list-item">
                    <a class="nav-link" href="{{ asset(route('fix_request')) }}">پرسش و پاسخ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

