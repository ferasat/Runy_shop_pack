<div class="container-fluid">
    <div class="bg-danger">
        <div class="container">
            <div class="row  py-4 sarPage">
                <div class="col-md-6 col-sm-12 col-lg-6 text-center pb-4">
                    <h1 class="text-white h3 h3-sm-w text-center">مجله فناوری ماشین ها اداری مرتضوی</h1>
                    <p class="text-muted">آموزش ریست کردن انواع پرینتر و دانلود انواع درایور های ماشین های اداری</p>
                    <form class="custom-form" role="search">
                        <div class="input-group input-group-lg">
                            <input name="keyword" type="search" class="form-control" id="keyword"
                                   placeholder="دنبال چی میگردی؟" aria-label="Search">

                            <button type="submit" class="btn btn-outline-primary bg-white">جستجو</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 text-center pb-4">
                    <div id="carouselTopPost" class="carousel slide">
                        <div class="carousel-indicators">
                            @for($x=1;$x<=$countSlide;$x++)
                                <button type="button" data-bs-target="#carouselTopPost" data-bs-slide-to="{{ $x-1 }}"
                                        @if($x == 1) class="active" @endif  aria-current="true"
                                        aria-label="Slide {{ $x }}"></button>
                            @endfor
                        </div>
                        <div class="carousel-inner">
                            @foreach($post3 as $post)
                                <div class="carousel-item @if($i==1) active @endif ">
                                    <img src="{{ $post->pic }}" class="d-block w-100" alt="{{ $post->name }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 title="{{ $post->name }}">{{ $post->name }}</h3>
                                        <p>{!! text_summary($post->texts) !!}</p>
                                    </div>
                                </div>
                                @php $i++ @endphp
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopPost"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">قبلی</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTopPost"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">ادامه</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5 pt-5">
            <div class="col-9 col-md-9 col-sm-12">
                <div id="carouselTopPost" class="carousel slide">
                    <div class="carousel-indicators">
                        @for($x=1;$x<=$countSlide;$x++)
                            <button type="button" data-bs-target="#carouselTopPost" data-bs-slide-to="{{ $x-1 }}"
                                    @if($x == 1) class="active" @endif  aria-current="true"
                                    aria-label="Slide {{ $x }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        @foreach($post3 as $post)
                            <div class="carousel-item @if($i==1) active @endif ">
                                <img src="{{ $post->pic }}" class="d-block w-100" alt="{{ $post->name }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 title="{{ $post->name }}">{{ $post->name }}</h3>
                                    <p>{!! text_summary($post->texts) !!}</p>
                                </div>
                            </div>
                            @php $i++ @endphp
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopPost"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">قبلی</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTopPost"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">ادامه</span>
                    </button>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header">تازه ترین درایور ها</div>
                    <ul class="list-group">
                        @foreach($dl_drivers as $driver)
                            <li class="list-group-item">
                                <a href="">
                                    <h3 class="h4" title="{{ $driver->name }}">{{ $driver->name }}</h3>
                                    <span
                                        class="smaller-Text"> بروزرسانی : {{ verta($driver->updated_at)->format('%d %B %Y') }} </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                @if($statusShowPosts == 'st1')
                    @foreach($posts as $post)
                        <div class="card mb-3">
                            <img src="{{ asset($post->pic) }}" class="card-img card-img-top" alt="{{ $post->name }}">
                            <div class="card-body">
                                <h4 class="card-title mb-3">
                                    <a href="{{ asset('post/'.$post->slug) }}" class="stretched-link">
                            <span class="overflow-hidden">
                                {{ $post->name }}
                            </span>
                                    </a>
                                </h4>
                                <div class="card-text">
                                    {!! text_summary($post->texts) !!}
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-outline-primary" href="{{ asset('post/'.$post->slug) }}">اطلاعات
                                    بیشتر</a>
                            </div>
                        </div>
                    @endforeach
                @elseif($statusShowPosts == 'st2')
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="cart">
                                    <img src="{{ asset($post->pic) }}" class="card-img card-img-top"
                                         alt="{{ $post->name }}">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">
                                            <a href="{{ asset('post/'.$post->slug) }}" class="stretched-link">
                                        <span class="overflow-hidden">
                                            {{ $post->name }}
                                        </span>
                                            </a>
                                        </h4>
                                        <div class="card-text">
                                            {!! text_summary($post->texts) !!}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-primary" href="{{ asset('post/'.$post->slug) }}">اطلاعات
                                            بیشتر</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="d-block w-100">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg- mb-5 sticky-top">
                    <div class="card-header">محصولات</div>
                    @foreach(recentProducts(5) as $repost)
                        <div class="row g-0 sh-10 mt-1">
                            <div class="col-3 col-sm-3 h-100">
                                <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                                     class="card-img card-img-horizontal">
                            </div>
                            <div class="col-9 col-sm-9">
                                <div class="d-flex flex-column">
                                    <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2"
                                                                     href="{{asset('product/'.$repost->slug)}}">{{$repost->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card bg- mb-5 sticky-bottom">
                    <div class="card-header">تازه ها</div>
                    @foreach(recentPosts(5) as $repost)
                        <div class="row g-0 sh-10 mt-1">
                            <div class="col-3 col-sm-3 h-100">
                                <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                                     class="card-img card-img-horizontal">
                            </div>
                            <div class="col-9 col-sm-9">
                                <div class="d-flex flex-column">
                                    <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2"
                                                                     href="{{asset('post/'.$repost->slug)}}">{{$repost->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
