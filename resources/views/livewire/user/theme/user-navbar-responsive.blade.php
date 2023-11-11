<div>
    <!-- header -->
    @livewire('user.theme.banner-top')

    <!-- responsive-header -->
    @livewire('user.theme.mobile-header')
    @livewire('user.theme.tablet-header')

    <!-- responsive-header -->


    <!-- header -->
    <header class="main-header ">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-3">
                    <div class="logo-area default">
                        <a href="{{ asset('/') }}">
                            <img src="{{ asset(setting_site()->site_logo) }}" alt="{{ setting_site()->site_name }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search mt-4">

                            <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">


                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 d-flex flex-row-reverse align-items-center">


                        <a class="m-2" href="#"> {{$totalQuantity}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>


                        <a class="border border-2 p-2 rounded m-2" href="#">
                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2.00098 11.999L16.001 11.999M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999" stroke="#707070" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#707070" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            ورود | ثبت نام
                        </a>


                </div>
            </div>
        </div>
        <nav class="main-menu ">
            <div class="container">
                <ul class="list d-flex justify-content-center   ">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link text-black">
                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L4 7" stroke="#343a40" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M20 12L4 12" stroke="#343a40" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 17L4 17" stroke="#343a40" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
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
                                        <a class="nav-link" href="#">پرینتر لیزری</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">تجهیزات فروشگاهی و
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
                        <a class="nav-link" href="#">نمایندگی برادر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link"
                           href="http://localhost:63342/mortazavi-bootstrap/drivers.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">
                            درایور و نرم افزار </a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link"
                           href="http://localhost:63342/mortazavi-bootstrap/articles.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">آموزش</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">سامانه تعمیرات</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">مقالات</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- header -->

</div>

