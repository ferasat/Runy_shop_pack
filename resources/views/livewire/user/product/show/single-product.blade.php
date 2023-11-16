<div class="container-fluid">
    <main class="single-product">
        <div class="container">
            @livewire('user.theme.breadcrumbs' , compact('breadcrumbs') )
            <div class="row bg-white p-2 rounded">
                <div class="col-lg-4 col-md-6 col-sm-12 position-relative mb-2">
                    <div class="product-gallery p-2 bg-white rounded shadow-sm">
                        <img class="w-100" src="{{ asset($product->pic) }}"
                             alt="{{ $product->name }}"/>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 rounded mb-2">
                    <div class="short-description p-2 bg-white rounded shadow-sm">
                        <div class="product-title">
                            <h1 title="{{ $product-> name }}" class="mb-4 h3">{{ $product-> name }}</h1>
                        </div>
                        @livewire('user.product.show.short-description' , ['product'=>$product])
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="bg-white rounded p-3 shadow-sm">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <svg class="icon-svg-panel" fill="#00b894" viewBox="0 0 52 52"
                                     data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                       stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M26,2c3,0,5.43,3.29,8.09,4.42s6.82.51,8.84,2.65,1.51,6.07,2.65,8.84S50,23,50,26s-3.29,5.43-4.42,8.09-.51,6.82-2.65,8.84-6.07,1.53-8.84,2.65S29,50,26,50s-5.43-3.29-8.09-4.42-6.82-.51-8.84-2.65-1.53-6.07-2.65-8.84S2,29,2,26s3.29-5.43,4.42-8.09.51-6.82,2.65-8.84,6.07-1.53,8.84-2.65S23,2,26,2Zm0,7.58A16.42,16.42,0,1,0,42.42,26h0A16.47,16.47,0,0,0,26,9.58Zm7.62,9.15,1.61,1.52a1.25,1.25,0,0,1,0,1.51L25.08,33.07a2.07,2.07,0,0,1-1.61.7,2.23,2.23,0,0,1-1.61-.7L16.37,27.6a1,1,0,0,1-.1-1.42l.1-.11L18,24.56a1.1,1.1,0,0,1,1.54-.07l.07.07,3.89,4,8.59-9.8A1.1,1.1,0,0,1,33.62,18.73Z"></path>
                                    </g>
                                </svg>
                                <span class="">گارانتی اصالت و سلامت فیزیکی کالا</span>
                            </li>
                            <li class="list-group-item">
                                <svg class="icon-svg-panel" version="1.1" id="_x32_"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                     xml:space="preserve" fill="#fbc531"><g id="SVGRepo_bgCarrier"
                                                                            stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                       stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css"> .st0 {
                                                fill: #fbc531;
                                            } </style>
                                        <g>
                                            <path class="st0"
                                                  d="M311.069,130.515c-0.963-5.641-5.851-9.768-11.578-9.768H35.43c-7.61,0-13.772,6.169-13.772,13.765 c0,7.61,6.162,13.772,13.772,13.772h64.263c7.61,0,13.772,6.17,13.772,13.773c0,7.603-6.162,13.772-13.772,13.772H13.772 C6.169,175.829,0,181.998,0,189.601c0,7.603,6.169,13.764,13.772,13.764h117.114c6.72,0,12.172,5.46,12.172,12.18 c0,6.72-5.452,12.172-12.172,12.172H68.665c-7.61,0-13.772,6.17-13.772,13.773c0,7.602,6.162,13.772,13.772,13.772h45.857 c6.726,0,12.179,5.452,12.179,12.172c0,6.719-5.453,12.172-12.179,12.172H51.215c-7.61,0-13.772,6.169-13.772,13.772 c0,7.603,6.162,13.772,13.772,13.772h87.014l5.488,31.042h31.52c-1.854,4.504-2.911,9.421-2.911,14.598 c0,21.245,17.218,38.464,38.464,38.464c21.237,0,38.456-17.219,38.456-38.464c0-5.177-1.057-10.094-2.911-14.598h100.04 L311.069,130.515z M227.342,352.789c0,9.146-7.407,16.553-16.553,16.553c-9.152,0-16.56-7.407-16.56-16.553 c0-6.364,3.627-11.824,8.892-14.598h15.329C223.714,340.965,227.342,346.424,227.342,352.789z"></path>
                                            <path class="st0"
                                                  d="M511.598,314.072l-15.799-77.941l-57.689-88.759H333.074l32.534,190.819h38.42 c-1.846,4.504-2.904,9.421-2.904,14.598c0,21.245,17.219,38.464,38.456,38.464c21.246,0,38.464-17.219,38.464-38.464 c0-5.177-1.057-10.094-2.91-14.598h16.741c6.039,0,11.759-2.708,15.582-7.386C511.273,326.136,512.8,319.988,511.598,314.072z M392.529,182.882h26.314l34.162,52.547h-51.512L392.529,182.882z M456.14,352.789c0,9.146-7.407,16.553-16.56,16.553 c-9.138,0-16.552-7.407-16.552-16.553c0-6.364,3.635-11.824,8.892-14.598h15.329C452.513,340.965,456.14,346.424,456.14,352.789z"></path>
                                        </g>
                                    </g></svg>
                                <span class="">ارسال به سرار کشور</span>
                            </li>
                            <li class="list-group-item">
                                <svg class="icon-svg-panel" viewBox="-1.4 -1.4 22.80 22.80"
                                     xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                       stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#6c429a"
                                              d="M5.67326018,0 C6.0598595,0 6.37326018,0.31324366 6.37326018,0.699649298 L6.373,2.009 L13.89,2.009 L13.8901337,0.708141199 C13.8901337,0.321735562 14.2035343,0.00849190182 14.5901337,0.00849190182 C14.976733,0.00849190182 15.2901337,0.321735562 15.2901337,0.708141199 L15.29,2.009 L18,2.00901806 C19.1045695,2.00901806 20,2.90399995 20,4.00801605 L20,18.001002 C20,19.1050181 19.1045695,20 18,20 L2,20 C0.8954305,20 0,19.1050181 0,18.001002 L0,4.00801605 C0,2.90399995 0.8954305,2.00901806 2,2.00901806 L4.973,2.009 L4.97326018,0.699649298 C4.97326018,0.31324366 5.28666085,0 5.67326018,0 Z M1.4,7.742 L1.4,18.001002 C1.4,18.3322068 1.66862915,18.6007014 2,18.6007014 L18,18.6007014 C18.3313708,18.6007014 18.6,18.3322068 18.6,18.001002 L18.6,7.756 L1.4,7.742 Z M6.66666667,14.6186466 L6.66666667,16.284778 L5,16.284778 L5,14.6186466 L6.66666667,14.6186466 Z M10.8333333,14.6186466 L10.8333333,16.284778 L9.16666667,16.284778 L9.16666667,14.6186466 L10.8333333,14.6186466 Z M15,14.6186466 L15,16.284778 L13.3333333,16.284778 L13.3333333,14.6186466 L15,14.6186466 Z M6.66666667,10.6417617 L6.66666667,12.3078931 L5,12.3078931 L5,10.6417617 L6.66666667,10.6417617 Z M10.8333333,10.6417617 L10.8333333,12.3078931 L9.16666667,12.3078931 L9.16666667,10.6417617 L10.8333333,10.6417617 Z M15,10.6417617 L15,12.3078931 L13.3333333,12.3078931 L13.3333333,10.6417617 L15,10.6417617 Z M4.973,3.408 L2,3.40831666 C1.66862915,3.40831666 1.4,3.67681122 1.4,4.00801605 L1.4,6.343 L18.6,6.357 L18.6,4.00801605 C18.6,3.67681122 18.3313708,3.40831666 18,3.40831666 L15.29,3.408 L15.2901337,4.33697436 C15.2901337,4.72338 14.976733,5.03662366 14.5901337,5.03662366 C14.2035343,5.03662366 13.8901337,4.72338 13.8901337,4.33697436 L13.89,3.408 L6.373,3.408 L6.37326018,4.32848246 C6.37326018,4.7148881 6.0598595,5.02813176 5.67326018,5.02813176 C5.28666085,5.02813176 4.97326018,4.7148881 4.97326018,4.32848246 L4.973,3.408 Z"></path>
                                    </g>
                                </svg>
                                <span class="">7 روز ضمانت بازگشت کالا</span>
                            </li>
                        </ul>

                        @if($product->specialPrice > 1 and $product->specialPrice < $product->price )

                            <div class="price-discount mt-4 text-left" data-title="تخفیف">

                                <del>{{ $product->price }}  </del>
                                <span
                                    class="badge bg-danger rounded">% {{ off_percent($product-> price , $product-> specialPrice) }} </span>


                            </div>
                            <div class="price-value mb-4 text-left">
                                <strong class="font-weight-bolder"
                                        style="font-size: 30px"> {{ number_format($product->specialPrice) }} </strong>
                                <span class="price-currency">{{ current_pay($product->current )  }}</span>
                            </div>
                        @elseif($product->price > 1)
                            <h5 class="h4">{{ $product->price }} <span> تومان </span></h5>
                        @endif

                        @livewire('user.cart.add-to-cart' , compact('product'))

                    </div>

                </div>
            </div>
            <hr class="border shadow-sm">
            <div class="row">
                <div class="container">
                    <div class="col-12  no-padding">
                        <div class="product-tabs ">
                            <div class="box-tabs ">
                                <ul class="nav">
                                    <li class="box-tab box-shadow-soft-1 bg-white rounded p-2 m-2 rounded-top">
                                        <a class="active" href="#desc">
                                            <i class="now-ui-icons objects_umbrella-13"></i> نقد و بررسی
                                        </a>
                                    </li>
                                    <li class="box-tab box-shadow-soft-1 bg-white rounded p-2 m-2 rounded-top">
                                        <a class="" href="#params">
                                            <i class="now-ui-icons shopping_cart-simple"></i> مشخصات
                                        </a>
                                    </li>
                                    <li class="box-tab box-shadow-soft-1 bg-white rounded p-2 m-2 rounded-top">
                                        <a class="" href="#comments">
                                            <i class="now-ui-icons shopping_shop"></i> نظرات کاربران
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card mb-3 border-0 box-shadow-soft-1">
                                <!-- Tab panes -->
                                <div class="card-body" id="desc">
                                    <article>
                                        <div class="parent-expert ">
                                            <div class="content-expert">
                                                {!! $product->texts !!}
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 box-shadow-soft-1">
                                <div class="card-body" id="params">
                                    <article>
                                        <h4 class="param-title">
                                            مشخصات فنی
                                            <span>{{ $product-> name }}</span>
                                        </h4>
                                        {!! $product->technical_info !!}
                                    </article>
                                </div>
                            </div>
                            <div class="card mb-3 border-0 box-shadow-soft-1">
                                <div class="card-body" id="comments">
                                    @livewire('user.comment.add-comment' , ['type'=>'product' , 'item'=>$product ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
