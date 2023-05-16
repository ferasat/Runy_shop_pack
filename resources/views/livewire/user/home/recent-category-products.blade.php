<div class="row">
    <div class="col-12">
        <div class="widget widget-product card">
            <header class="card-header">
                <h3 class="card-title">
                    <span>کامپیوتر و لوازم جانبی</span>
                </h3>
                <a href="#" class="view-all">مشاهده همه</a>
            </header>
            <div class="product-carousel owl-carousel owl-theme">
                @foreach($products as $product)
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('theme/img/200x200_1.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <h2 class="post-title">
                            <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                        </h2>
                        <div class="price">
                            <div class="text-center">
                                <del><span>4,299,000<span>تومان</span></span></del>
                            </div>
                            <div class="text-center">
                                <ins><span>4,180,000<span>تومان</span></span></ins>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
