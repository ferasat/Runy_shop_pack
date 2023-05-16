<section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
    <div class="row m-0">
        <ol class="carousel-indicators pr-0 d-flex flex-column col-lg-3">
            @foreach($products as $product)
                <li class="active" data-target="#amazing-slider" data-slide-to="{{ $product->id }}">
                    <span>لپ تاپ INSPIRON</span>
                </li>
            @endforeach


            <li class="view-all">
                <a href="#" class=" btn btn-primary btn-block hvr-sweep-to-left">
                    <i class="fa fa-arrow-left"></i>مشاهده همه شگفت انگیزها
                </a>
            </li>
        </ol>
        <div class="carousel-inner p-0 col-12 col-lg-9">
            <img class="amazing-title" src="{{ asset('theme/img/amazing-title-01.png') }}" alt="">
            @foreach($products as $product)
            <div class="carousel-item active">
                <div class="row m-0">
                    <div class="right-col col-5 d-flex align-items-center">
                        <a class="w-100 text-center" href="#">
                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="left-col col-7">
                        <div class="price">
                            <del><span>4,299,000<span>تومان</span></span></del>
                            <ins><span>4,180,000<span>تومان</span></span></ins>
                            <span class="discount-percent">3 % تخفیف</span>
                        </div>
                        <h2 class="product-title">
                            <a href="#"> لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B </a>
                        </h2>
                        <ul class="list-group">
                            <li class="list-group-item">رنگ: مشکی</li>
                            <li class="list-group-item">160 گیگابایت</li>
                        </ul>
                        <hr>
                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                            <span data-days>0</span>:
                            <span data-hours>0</span>:
                            <span data-minutes>0</span>:
                            <span data-seconds>0</span>
                        </div>
                        <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
