<div>
    <!-- header -->
    @livewire('user.theme.banner-top')

    <!-- responsive-header -->
    <nav class="navbar direction-ltr fixed-top header-responsive">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ asset('/') }}">
                    <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <div class="search-nav">
                    <form action="">
                        <input type="text" placeholder="جستجو ...">
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

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="logo-nav-res text-center">
                    <a href="">
                        <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="sub-menu">
                        <a>دسته بندی کالاها</a>
                        <ul>
                            <li class="sub-menu">
                                <a>تجهیزات و لوازم اداری</a>
                                <ul>
                                    <li>
                                        <a>تجهیزات و لوازم پزشکی</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost:63342/mortazavi-bootstrap/articles.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">مقالات</a>
                                    </li>
                                    <li>
                                        <a>نمایندگی برادر</a>
                                    </li>
                                    <li>
                                        <a>آموزش</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a>گوشی موبایل</a>
                                <ul>
                                    <li>
                                        <a></a>
                                    </li>
                                    <li>
                                        <a>آیفون اپل</a>
                                    </li>
                                    <li>
                                        <a>هوآوی</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>ساعت هوشمند</a>
                            </li>
                            <li>
                                <a>اسپیکر بلوتوث و با سیم</a>
                            </li>
                            <li class="sub-menu">
                                <a>موبایل</a>
                                <ul>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Asus</a>
                                    </li>
                                    <li>
                                        <a>HTC</a>
                                    </li>
                                    <li>
                                        <a>LG</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a>تجهیزات و لوازم اداری</a>
                        <ul>
                            <li class="sub-menu">
                                <a>لوازم جانبی گوشی</a>
                                <ul>
                                    <li>
                                        <a>کیف و کاور گوشی</a>
                                    </li>
                                    <li>
                                        <a>پاور بانک</a>
                                    </li>
                                    <li>
                                        <a>هندزفری،هدفون</a>
                                    </li>
                                    <li>
                                        <a>پایه نگهدارنده گوشی</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a>گوشی موبایل</a>
                                <ul>
                                    <li>
                                        <a></a>
                                    </li>
                                    <li>
                                        <a>آیفون اپل</a>
                                    </li>
                                    <li>
                                        <a>هوآوی</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>ساعت هوشمند</a>
                            </li>
                            <li>
                                <a>اسپیکر بلوتوث و با سیم</a>
                            </li>
                            <li class="sub-menu">
                                <a>موبایل</a>
                                <ul>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Asus</a>
                                    </li>
                                    <li>
                                        <a>HTC</a>
                                    </li>
                                    <li>
                                        <a>LG</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a>لوازم و تجهیزات اداری</a>
                        <ul>
                            <li class="sub-menu">
                                <a>لوازم جانبی گوشی</a>
                                <ul>
                                    <li>
                                        <a>کیف و کاور گوشی</a>
                                    </li>
                                    <li>
                                        <a>پاور بانک</a>
                                    </li>
                                    <li>
                                        <a>هندزفری،هدفون</a>
                                    </li>
                                    <li>
                                        <a>پایه نگهدارنده گوشی</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a>گوشی موبایل</a>
                                <ul>
                                    <li>
                                        <a></a>
                                    </li>
                                    <li>
                                        <a>آیفون اپل</a>
                                    </li>
                                    <li>
                                        <a>هوآوی</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>ساعت هوشمند</a>
                            </li>
                            <li>
                                <a>اسپیکر بلوتوث و با سیم</a>
                            </li>
                            <li class="sub-menu">
                                <a>موبایل</a>
                                <ul>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Asus</a>
                                    </li>
                                    <li>
                                        <a>HTC</a>
                                    </li>
                                    <li>
                                        <a>LG</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a> لوازم و تجهیزات پزشکی </a>
                    </li>
                    <li>
                        <a>مقالات</a>
                    </li>
                    <li>
                        <a>آموزش</a>
                    </li>
                    <li>
                        <a>سامانه تعمیرات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- responsive-header -->


    <!-- header -->
    <header class="main-header ">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-3">
                    <div class="logo-area default">
                        <a href="{{ asset('/') }}">
                            <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search mt-4">

                            <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">


                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <nav class="main-menu">
            <div class="container">
                <ul class="list float-right">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" >دسته بندی کالا</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                                <a class="main-list-item nav-link" href="{{ asset('/shop') }}" >همه محصولات</a>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >تحهیزات اداری و فروشگاهی</a>

                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >پرینتر</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">جهیزات اداری-پزشکی</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">تجهیزات فروشگاهی و بانکی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >بارکدخوان</a>

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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لوازم جانبی لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >فیش پرینتر</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">مواد مصرفی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >کارتریج</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >ریبون</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >قطعات</a>
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
                                        <a class="nav-link" href="#">فرم رولر  </a>
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
                                        <a class="nav-link" href="#">  کاغذ کش</a>
                                    </li>


                                    <li class="list-item">
                                        <a class="nav-link" href="#"> سپریشن پد </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">  سینی خروجی</a>
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
                        <a class="nav-link" >کالای استوک</a>
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
                                        <a class="nav-link" href="#">بارکدخوان استوک  </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">فیش پرینتر کارکرده </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">موبایل پرینتر استوک  </a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">خدمات</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >تعمیر تجهیزات فروشگاهی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر دستگاه فیش زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر دستگاه لیبل زن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر دستگاه بارکد خوان</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" >تعمیر پرینتر و تعمیر دستگاه کپی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر دستگاه کپی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر پرینترهای کانن</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >تعمیر پرینترهای اپسون</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children ">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" >شارژ کارتریج و دستگاه کپی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" >شارژ کارتریج HP</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >شارژ کارتریج Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >شارژ کارتریج سامسونگ</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" >شارژ کارتریج در محل</a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">نمایندگی برادر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://localhost:63342/mortazavi-bootstrap/drivers.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE"> درایور و نرم افزار </a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="http://localhost:63342/mortazavi-bootstrap/articles.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">آموزش</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">سامانه تعمیرات</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">مقالات</a>
                    </li>
                    <li class="list-item amazing-item" data-bs-toggle="modal" data-bs-target="#cartModal1">

                        @livewire('user.cart.cart-modal')
                        <div class="modal fade" id="cartModal1" tabindex="-1" aria-labelledby="cartModal1Label" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <div class="modal-title h5" id="cartModal1Label">
                                            سبد خرید شما{{$totalQuantity}}
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-image">
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">محصول</th>
                                                <th scope="col">قیمت</th>
                                                <th scope="col">تعداد</th>
                                                <th scope="col">قیمت کل</th>
                                                <th scope="col">عمل</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td class="w-25">
                                                    <img src="{{ asset('theme/img/20221105_224825_227343122.png') }}" class="img-fluid img-thumbnail" alt="محصول">
                                                </td>
                                                <td>پرینتر کنون</td>
                                                <td>500,000 تومان</td>
                                                <td class="qty"><label for="input1"></label><input type="text" class="form-control" id="input1" value="1"></td>
                                                <td>500,000 تومان</td>
                                                <td>
                                                    <a href="#" class=" btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-end">
                                            <h6>Total: <span class="price text-success">500,000 تومان</span></h6>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-top-0 d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">بررسی</button>
                                        <button type="button" class="btn btn-forth">خروج</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="nav-link" href="#"> سبد خرید{{$totalQuantity}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>

                    </li>
                    <li class="list-item amazing-item"  data-bs-toggle="modal" data-bs-target="#loginModal">

                        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="bg-white">
                                            <div class="logo-nav-res default text-center">
                                                <a href="">
                                                    <img src="{{ setting_site()->site_logo }}" height="36px" alt="">
                                                </a>
                                            </div>
                                            <h3 class="text-center">ورود / ثبت نام </h3>
                                            <p class="text-center">سلام! به فروشگاه مرتضوی خوش آمدید...</p>
                                            <form method="post" action="{{ asset('/login') }}">
                                                <div class="mb-3 mt-4">
                                                    <label for="exampleInputEmail1" class="form-label">ایمیل خود را وارد کنید</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" >
                                                </div>

                                                <button type="submit" class="btn btn-primary align-items-center mt-3" style="width: 100%">ورود و ثبت نام با رمز یکبار مصرف</button>
                                                <button type="submit" class="btn btn-forth align-items-center mt-3" style="width: 100%">ورود و ثبت نام با پیامک</button>

                                                <div class="form-check mt-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <a href="#">شرایط و قوانین</a>  استفاده از سرویس های سایت فروشگاه مرتضوی را می پذیرم .
                                                    </label>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="nav-link" href="#">ورود | ثبت نام
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                                <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                            </svg>


                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- header -->

</div>

