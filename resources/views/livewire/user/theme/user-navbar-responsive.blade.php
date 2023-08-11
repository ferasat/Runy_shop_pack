<div>
    <!-- header -->
    @livewire('user.theme.banner-top')

    <header class="main-header default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                    <div class="logo-area default">
                        <a href="#">
                            <img src="{{ setting_site()->site_logo }}" alt="{{ setting_site()->site_name }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search">
                            <input type="text" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <button type="submit"><img src="{{ asset('theme/img/search.png') }}" alt="جستجو کنید"></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="user-login dropdown">
                        <a href="#" class="btn btn-neutral dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false" id="btn_login">
                            ورود / ثبت نام
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="btn_login">
                            <div class="dropdown-item">
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    ورود به سایت
                                </button>

                            </div>
                            <div class="dropdown-item font-weight-bold">
                                <span>کاربر جدید هستید؟</span> <a class="register" href="{{ asset('/register') }}">ثبت‌نام</a>
                            </div>
                        </ul>
                    </div>

                    <div class="cart dropdown">
                        <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="cart-button" >
                            <i class="now-ui-icons shopping_cart-simple" onclick="k()"></i> سبد خرید
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="btn_cart">
                            <div class="basket-header">
                                <div class="basket-total">
                                    <span>مبلغ کل خرید:</span>
                                    <span>۲۳,۵۰۰</span>
                                    <span> تومان</span>
                                </div>
                                <a href="#" class="basket-link">
                                    <span>مشاهده سبد خرید</span>
                                    <div class="basket-arrow"></div>
                                </a>

                            </div>
                            <ul class="basket-list">
{{--                                @foreach(session('cart') ?? [] as $key => $item)--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="basket-item">--}}
{{--                                            <button class="basket-item-remove"></button>--}}
{{--                                            <div class="basket-item-content">--}}
{{--                                                <div class="basket-item-image">--}}
{{--                                                    <img alt="" src="{{ asset('theme/img/to_cart.jpg') }}">--}}
{{--                                                </div>--}}
{{--                                                <div class="basket-item-details">--}}
{{--                                                    <div class="basket-item-title">{{ $item['name'] }}</div>--}}
{{--                                                    <div class="basket-item-params">--}}
{{--                                                        <div class="basket-item-props">--}}
{{--                                                            <span>{{ $item['quantity'] }} عدد</span>--}}
{{--                                                            --}}{{-- Add other item properties as needed --}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
                            </ul>
                            <a href="#" class="basket-submit">ورود و ثبت سفارش</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="container-fluid">
                <ul class="list float-right">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="#">کالای دیجیتال</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">لوازم جانبی گوشی</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">گوشی موبایل</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">ساعت هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">موبایل</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت و کتابخوان</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">دوربین</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">کامپیوتر و تجهیزات جانبی
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
                            <img src="{{ asset('theme/img/1636.png') }}" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="#">آرایشی،بهداشت و سلامت</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">لوازم جانبی گوشی</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">گوشی موبایل
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">ساعت هوشمند
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">موبایل</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت و کتابخوان</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">دوربین</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">کامپیوتر و تجهیزات جانبی
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
                            <img src="{{ asset('theme/img/1636.png') }}" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">خودرو،ابزار و اداری</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">لوازم جانبی گوشی</a>
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">گوشی موبایل
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
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">ساعت هوشمند
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link" href="#">موبایل</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت و کتابخوان</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">دوربین</a>
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
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">کامپیوتر و تجهیزات جانبی
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
                            <img src="{{ asset('theme/img/1636.png') }}" alt="">
                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">مد و پوشاک</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">خانه و آشپزخانه</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">کتاب،لوازم تحریر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">ورزش و سفر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">وسایل نقلیه و صنعتی</a>
                    </li>
                    <li class="list-item amazing-item">
                        <a class="nav-link" href="# " target="_blank">شگفت‌انگیزها</a>
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
</script>
