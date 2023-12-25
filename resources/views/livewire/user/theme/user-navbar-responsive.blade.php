<div>
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
                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M2.00098 11.999L16.001 11.999M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999"
                                    stroke="#707070" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path opacity="0.5"
                                      d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17"
                                      stroke="#707070" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        ورود | ثبت نام
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
                            دسته بندی کالا</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                                <a class="main-list-item nav-link" href="{{ asset('/shop') }}">همه محصولات</a>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">تحهیزات
                                    اداری و فروشگاهی</a>

                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="https://mortazavistore.ir/product-category/Laser-printer">پرینتر لیزری</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرینتر جوهر افشان</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرینتر چاپ عکس</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرینتر سوزنی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ماشین حساب</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">دستگاه کپی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">اسکنر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">دستگاه کاغذ خردکن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پول شمار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تست اسکناس</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرفراژ چک</a>
                                    </li>

                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">جهیزات اداری-پزشکی</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">مچ بند شناسایی بیمار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">پرینتر مچ بند</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                                <a class="main-list-item nav-link" href="#">تجهیزات فروشگاهی و
                                    بانکی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">بارکدخوان</a>

                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بارکدخوان با سیم</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بارکدخوان بی سیم</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بارکدخوان همراه</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لوازم جانبی لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">فیش پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">فیش پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">صندوق فروشگاهی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نرم افزار فروش و حسابداری</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لیبل زن دستی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">موبایل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کشوی پول</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">مواد
                                    مصرفی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">کارتریج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارتریج لیزری رنگی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارتریج لیزری مشکی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارتریج جوهرافشان</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">ریبون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون پرینتر سوزنی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون کارت پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون تاریخ زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تونر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لیبل (برچسب)</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نوار لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارت pvc</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> رول حرارتی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">جوهر پرینتر و پلاتر </a>
                                    </li>


                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">


                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تانک و کارتریج قابل شارژ </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کاغذ عکس </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">دولوپر</a>
                                    </li>


                                    <li class="list-item">
                                        <a class="nav-link" href="#">مرکب ریسوگراف</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">باتری</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کاربن فکس</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">قطعات</a>
                                    </li>

                                    <li class="list-item">

                                        <a class="nav-link" href="#">چیپست</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">درام</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بلید </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> مگنت </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">فرم رولر </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> فیوزینگ</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> فیلم فیوزینگ</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> برد فرمتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> برد پاور</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">

                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> ترنسفر بلت</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> پرس</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> هات رول</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> کاغذ کش</a>
                                    </li>


                                    <li class="list-item">
                                        <a class="nav-link" href="#"> سپریشن پد </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> سینی خروجی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> سینی ورودی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> ناخنک </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> چرخ دنده </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> هد پرینتر </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> آداپتور </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> سایر قطعات </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"> تعمیر دستگاه کپی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تعمیر پرینترهای اپسون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تعمیر دستگاه فیش زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">تعمیر دستگاه بارکدخوان</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">شارژ کارتریج سامسونگ</a>
                                    </li>
                                </ul>

                            </li>

                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link">کالای استوک</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرنتر استوک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">دستگاه کپی استوک </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لیبل پرینتر استوک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بارکدخوان استوک </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">فیش پرینتر کارکرده </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">موبایل پرینتر استوک </a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">خدمات</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">تعمیر
                                    تجهیزات فروشگاهی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر دستگاه فیش زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر دستگاه لیبل زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر دستگاه بارکد خوان</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">تعمیر
                                    پرینتر و تعمیر دستگاه کپی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر دستگاه کپی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر پرینترهای کانن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">تعمیر پرینترهای اپسون</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children ">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link">شارژ کارتریج و
                                    دستگاه کپی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">شارژ کارتریج HP</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">شارژ کارتریج Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">شارژ کارتریج سامسونگ</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">شارژ کارتریج در محل</a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="https://mortazavistore.ir/page/%D9%86%D9%85%D8%A7%DB%8C%D9%86%D8%AF%DA%AF%DB%8C-%D8%A8%D8%B1%D8%A7%D8%AF%D8%B1-%D8%AF%D8%B1-%D8%A7%D8%B5%D9%81%D9%87%D8%A7%D9%86">نمایندگی برادر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link"
                           href="https://mortazavistore.ir/post-category/Driver-Download">
                            درایور و نرم افزار </a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link"
                           href="https://mortazavistore.ir/post-category/learn">آموزش</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="{{ asset(route('fix_request')) }}">سامانه تعمیرات</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="{{ asset('/blog') }}">مقالات</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- header -->
</div>

