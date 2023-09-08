<div>
    <!-- header -->
    @livewire('user.theme.banner-top')

    <!-- responsive-header -->
    <nav class="navbar direction-ltr fixed-top header-responsive">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-brand" href="#">
                    <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                </div>
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
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-3">
                    <div class="logo-area">
                        <a href="">
                            <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area">
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

            </div>
        </div>
        <nav class="main-menu">
            <div class="container">
                <ul class="list float-right">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link">کالای دیجیتال</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="http://localhost:63342/mortazavi-bootstrap/allproduct.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">همه
                                    محصولات</a>

                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">پرینتر</a>
                                <ul class="sub-menu nav">
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
                                        <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
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
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">ماشین حساب</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">دستگاه کپی</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">تجهیزات فروشگاهی و
                                    بانکی</a>
                                <ul class="sub-menu nav">
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
                                        <a class="nav-link" href="#">لیبل پرینتر</a>
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
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">مواد
                                    مصرفی</a>
                                <ul class="sub-menu nav">
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
                                        <a class="nav-link" href="#">ریبون پرینتر سوزنی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون لیبل پرینتر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ریبون کارت پرینتر</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">کالای
                                    استوک</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پرینتر استوک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">دستگاه کپی استوک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">لیبل پرینتر استوک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">بارکدخوان استوک</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">سامانه
                                    تعمیرات
                                </a>
                                <ul class="sub-menu nav">
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
                        <a class="nav-link">تعمیر تجهیزات فروشگاهی</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">تعمیر تجهیزات فروشگاهی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">گوشی موبایل
                                        </a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">ساعت هوشمند
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت و
                                    کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">کامپیوتر
                                    و تجهیزات جانبی
                                </a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">مادر بورد</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">تجهیزات و لوازم پزشکی</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">گوشی موبایل
                                        </a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">ساعت هوشمند
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link">تبلت و
                                    کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link">کامپیوتر و تجهیزات
                                    جانبی
                                </a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">مادر بورد</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link">کارت گرافیک</a>
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
                           href="http://localhost:63342/mortazavi-bootstrap/articles.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">مقالات</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">سامانه تعمیرات</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">آموزش</a>
                    </li>
                    <li class="list-item amazing-item">

                        <a class="nav-link" href="{{asset(route('cart'))}}"> سبد خرید
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="list-item amazing-item">

                        <a class="nav-link"
                           href="http://localhost:63342/mortazavi-bootstrap/signinpage.html?_ijt=ucfrq60mf07i33i51jis2ngb4d&_ij_reload=RELOAD_ON_SAVE">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                                <path fill-rule="evenodd"
                                      d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                            </svg>
                            ورود | ثبت نام
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- header -->

</div>
<script>
    function k() {
        window.onload;
    }
    document.addEventListener('livewire:load', function () {
        Livewire.on('refreshHeader', function () {
            Livewire.hook('message.sent', () => {
                Livewire.emit('refreshHeader');
            });
            Livewire.hook('message.processed', () => {
                Livewire.emit('refreshHeader');
            });
        });
    });
</script>
