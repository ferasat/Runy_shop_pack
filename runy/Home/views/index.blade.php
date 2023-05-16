@extends('layouts.runyApp' , ['title'=>setting_site()->site_name])

@section('content')

    @livewire('user.theme.user-navbar-responsive')
    <main class="main default">

        @livewire('user.home.slide.slide-show')

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 order-1 order-lg-2">

                    @livewire('user.home.slide.amazing-slider')

                    <div class="row" id="amazing-slider-responsive">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <img src="{{ asset('theme/img/amazing-title-01.png') }}" width="150px" alt="">
                                    <a href="#" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>2,780,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_2.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,279,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>18,450,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="#" target="_blank">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-1.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="#" target="_top">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-2.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="#" target="_top">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-3.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="#" target="_top">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-4.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @livewire('user.home.recent-category-products' , [ 'cat_id'=> 1 ] , key(1))


                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="#" target="_blank">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-9.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="#" target="_top">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-10.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="widget widget-banner card">
                                        <a href="#" target="_blank">
                                            <img class="img-fluid" src="{{ asset('/theme/img/banner/banner-10.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="brand-slider card">
                        <header class="card-header">
                            <h3 class="card-title"><span>برندهای ویژه</span></h3>
                        </header>
                        <div class="owl-carousel">
                            <div class="item">
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <aside class="col-12 col-lg-3 sidebar order-2 order-lg-1">
                    <div class="sidebar-inner default">
                        <div class="widget-banner widget card">
                            <a href="#" target="_top">
                                <img class="img-fluid" src="{{ asset('/theme/img/s1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="widget-services widget card">
                            <div class="row">
                                <div class="feature-item col-12">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('theme/img/svg/return-policy.svg') }}">
                                    </a>
                                    <p>ضمانت برگشت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('theme/img/svg/payment-terms.svg') }}">
                                    </a>
                                    <p>پرداخت درمحل</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('theme/img/svg/delivery.svg') }}">
                                    </a>
                                    <p>تحویل اکسپرس</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('theme/img/svg/origin-guarantee.svg') }}">
                                    </a>
                                    <p>تضمین بهترین قیمت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('theme/img/svg/contact-us.svg') }}">
                                    </a>
                                    <p>پشتیبانی 24 ساعته</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-suggestion widget card">
                            <header class="card-header">
                                <h3 class="card-title">پیشنهاد لحظه ای</h3>
                            </header>
                            <div id="progressBar">
                                <div class="slide-progress"></div>
                            </div>
                            <div id="suggestion-slider" class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی ایسوس مدل FX503VD - A </a>
                                    </h3>
                                    <div class="price">
                                        <span class="amount">5,700,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ ۱۳ اینچی اپل مدل MacBook Pro MLH12 همراه با تاچ بار
                                        </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">10,300,000<span>تومان</span></span></del>
                                        <span class="amount">1,099,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی اپل مدل ۲۰۱۷ MacBook Pro MPTT2 همراه با تاچ
                                            بار </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">16,800,000<span>تومان</span></span></del>
                                        <span class="amount">16,286,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> لپ تاپ ۱۳ اینچی اپل مدل MacBook Air MQD32 2017 </a>
                                    </h3>
                                    <div class="price">
                                        <del><span class="amount">6,000,000<span>تومان</span></span></del>
                                        <span class="amount">5,746,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="#" target="_blank">
                                <img class="img-fluid" src="{{ asset('theme/img/sidebar_1.jpeg') }}" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="#" target="_blank">
                                <img class="img-fluid" src="{{ asset('theme/img/sidebar_1.jpeg') }}" alt="">
                            </a>
                        </div>
                        <div class="widget-banner widget card">
                            <a href="#" target="_top">
                                <img class="img-fluid" src="{{ asset('theme/img/sidebar_1.jpeg') }}" alt="">
                            </a>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </main>

    @livewire('user.theme.user-footer')

@endsection
