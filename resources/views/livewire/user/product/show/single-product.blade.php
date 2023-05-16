<main class="single-product default">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    {!! $breadcrumbs !!}
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <article class="product">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-gallery default">
                                <img class="zoom-img" id="img-product-zoom" src="{{ asset($product->pic) }}"
                                     data-zoom-image="{{ asset($product->pic) }}" width="411"
                                     alt="{{ $product->name }}"/>

                                <div id="gallery_01f" style="width:500px;float:left;">
                                    <ul class="gallery-items">
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update=""
                                               data-image="https://yasshop.ir/wp-content/uploads/%D8%A7%D9%84%D9%86%DA%AF%D9%88-%D8%B7%D9%84%D8%A7%D8%B1%D9%88%D8%B3-5.jpg"
                                               data-zoom-image="https://yasshop.ir/wp-content/uploads/%D8%A7%D9%84%D9%86%DA%AF%D9%88-%D8%B7%D9%84%D8%A7%D8%B1%D9%88%D8%B3-5.jpg">
                                                <img
                                                    src="https://yasshop.ir/wp-content/uploads/%D8%A7%D9%84%D9%86%DA%AF%D9%88-%D8%B7%D9%84%D8%A7%D8%B1%D9%88%D8%B3-5.jpg"
                                                    width="100"/></a>
                                        </li>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="https://yasshop.ir/wp-content/uploads/2204246-1660-1.jpg"
                                               data-zoom-image="https://yasshop.ir/wp-content/uploads/2204246-1660-1.jpg"><img
                                                    src="https://yasshop.ir/wp-content/uploads/2204246-1660-1.jpg"
                                                    width="100"/></a>
                                        </li>
                                        <li>
                                            <a href="tester" class="elevatezoom-gallery"
                                               data-image="assets/img/product/1335154.jpg"
                                               data-zoom-image="assets/img/product/1335154.jpg">
                                                <img src="assets/img/product/1335154.jpg" width="100"/>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="elevatezoom-gallery"
                                               data-image="https://yasshop.ir/wp-content/uploads/2204246-1660-2.jpg"
                                               data-zoom-image="https://yasshop.ir/wp-content/uploads/2204246-1660-2.jpg"
                                               class="slide-content"><img
                                                    src="https://yasshop.ir/wp-content/uploads/2204246-1660-2.jpg"
                                                    height="68"/></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="gallery-options">
                                <li>
                                    <button class="add-favorites"><i class="fa fa-heart"></i></button>
                                    <span class="tooltip-option">افزودن به علاقمندی</span>
                                </li>
                                <li>
                                    <button data-toggle="modal" data-target="#myModal"><i
                                            class="fa fa-share-alt"></i></button>
                                    <span class="tooltip-option">اشتراک گذاری</span>
                                </li>
                            </ul>
                            <!-- Modal Core -->
                            <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">اشتراک گذاری</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-share">
                                                <div class="form-share-title">اشتراک گذاری در شبکه های اجتماعی</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="btn-group-share">
                                                            <li><a href="#" class="btn-share btn-share-twitter"
                                                                   target="_blank"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="#" class="btn-share btn-share-facebook"
                                                                   target="_blank"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" class="btn-share btn-share-google-plus"
                                                                   target="_blank"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-share-title">ارسال به ایمیل</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="ui-input ui-input-send-to-email"></label>
                                                        <input class="ui-input-field" type="email"
                                                               placeholder="آدرس ایمیل را وارد نمایید.">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn-primary">ارسال</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="form-share-url default">
                                                <div class="form-share-url-title">آدرس صفحه</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="ui-url">
                                                            <input class="ui-url-field"
                                                                   value="https://www.digikala.com">
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Core -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-title default">
                                <h1 title="{{ $product-> name }}" class="mb-4 h3">{{ $product-> name }}</h1>
                            </div>
                            <div class="product-directory default">
                                <ul>
                                    <span>دسته‌بندی</span> :
                                    @if($cats = catsInPro($product->id))
                                        @foreach($cats as $tanx )
                                            <li>
                                                <a class="mb-1 d-inline-block text-small">{{ infoCatPro($tanx->item_id)->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>

                            @if($is_feature)
                                <div class="product-variants default">
                                    <span>انتخاب رنگ: </span>
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio1" value="option1">
                                        <label for="radio1">
                                            خاکستری
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                                        <label for="radio2">
                                            نقره ای
                                        </label>
                                    </div>

                                </div>
                            @endif

                            <div class="product-guarantee default">
                                <i class="fa fa-check-circle"></i>
                                <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                            </div>

                            @if($product->specialPrice > 1)
                                <div class="price-value">
                                    <span> {{ $product-> specialPrice }} </span>
                                    <span class="price-currency">تومان</span>
                                </div>
                                <div class="price-discount" data-title="تخفیف">
                                            <span>
                                                {{ off_percent($product-> price , $product-> specialPrice) }}
                                            </span>
                                    <span>%</span>
                                </div>
                                <div class="text-muted text-overline">
                                    <del>{{ $product-> price }} <span> تومان </span></del>
                                </div>
                            @else
                                <div class="h4">{{ $product-> price }} <span> تومان </span></div>
                            @endif

                            <div class="product-add default">
                                <div class="parent-btn">
                                    <a href="#" class="dk-btn dk-btn-info">
                                        افزودن به سبد خرید
                                        <i class="now-ui-icons shopping_cart-simple"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">
                            <div class="product-guaranteed default">
                                بیش از ۱۸۰ نفر از خریداران این محصول را پیشنهاد داده‌اند
                            </div>
                            <div class="product-params default">
                                @livewire('user.product.show.short-description' , ['product'=>$product])
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12 default no-padding">
                    <div class="product-tabs default">
                        <div class="box-tabs default">
                            <ul class="nav" >
                                <li class="box-tabs-tab">
                                    <a class="active" data-toggle="tab" href="#desc" role="tab"
                                       aria-expanded="true">
                                        <i class="now-ui-icons objects_umbrella-13"></i> نقد و بررسی
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                        <i class="now-ui-icons shopping_cart-simple"></i> مشخصات
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                        <i class="now-ui-icons shopping_shop"></i> نظرات کاربران
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a data-toggle="tab" href="#questions" role="tab" aria-expanded="false">
                                        <i class="now-ui-icons ui-2_settings-90"></i> پرسش و پاسخ
                                    </a>
                                </li>
                            </ul>
                            <div class="card ">
                                <!-- Tab panes -->
                                    <div class="card-body" id="desc" >
                                        <article>
                                            <div class="parent-expert default">
                                                <div class="content-expert">
                                                    {!! $product->texts !!}
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="card-body" id="params" >
                                        <article>
                                            <h2 class="param-title">
                                                مشخصات فنی
                                                <span>Apple iPhone X 256GB Mobile Phone</span>
                                            </h2>
                                            <section>
                                                <h3 class="params-title">مشخصات کلی</h3>
                                                <ul class="params-list">
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">ابعاد</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        7.7 × 70.9 × 143.6 میلی‌متر
                                                                    </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">توضیحات سیم کارت</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        سایز نانو (8.8 × 12.3 میلی‌متر)
                                                                    </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">وزن</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        174 گرم
                                                                    </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">ویژگی‌های خاص</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        مقاوم در برابر آب , مناسب عکاسی , مناسب عکاسی
                                                                        سلفی , مناسب بازی , مجهز به حس‌گر تشخیص چهره
                                                                    </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">تعداد سیم کارت</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        تک سیم کارت
                                                                    </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h3 class="params-title">پردازنده</h3>
                                                <ul class="params-list">
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">تراشه</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        Apple A11 Bionic Chipset
                                                                    </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="params-list-key">
                                                            <span class="block">نوع پردازنده</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                                    <span class="block">
                                                                        64 بیت
                                                                    </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                        </article>
                                    </div>
                                    <div class="card-body" id="comments" >
                                        <article>
                                            <h2 class="param-title">
                                                نظرات کاربران
                                                <span>۱۲۳ نظر</span>
                                            </h2>

                                        </article>
                                    </div>
                                    <div class="card-body" id="questions" >
                                        <article>
                                            <h2 class="param-title">
                                                افزودن نظر
                                                <span>نظر خود را در مورد محصول مطرح نمایید</span>
                                            </h2>
                                            <form action="" class="comment">
                                                    <textarea class="form-control" placeholder="نظر"
                                                              rows="5"></textarea>
                                                <button class="btn btn-default">ارسال نظر</button>
                                            </form>
                                        </article>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
