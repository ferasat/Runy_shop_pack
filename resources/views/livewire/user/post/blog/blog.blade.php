<div class="container-fluid p-0">
    <div class="bg-">
        <div class="container">
            <div class="row py-4 sarPage d-flex justify-content-center">
                <div class="col-md-6 col-sm-12 col-lg-6 text-center pb-4">
                    <h1 class="text-danger h3 h3-sm-w text-center">مجله فناوری ماشین های اداری مرتضوی</h1>
                    <p class="text-muted py-3">با ما بروز باشید  </p>
                    <form class="custom-form" role="search">
                        <div class="input-group input-group-lg mb-2">
                            <input name="keyword" type="search" class="form-control border-color-runy-danger" id="keyword"
                                   placeholder="دنبال چی میگردی؟" aria-label="Search">

                            <button type="submit" class="btn btn-runy-search bg-white">
                                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#fd5858" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </button>
                        </div>
                        پیشنهاد : <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">آموزش ریست کردن پرینتر</span> ، <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">دانلود درایور</span> ، <span></span>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container">

        <div class="row py-5">
            <div class="col-md-9">
                <div class="row">
                @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="card mb-3">
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
                                    <a class="btn btn-outline-primary" href="{{ asset('post/'.$post->slug) }}"> بیشتر</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
                <div class="d-block w-100">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-5 sticky-top">
                    <div class="card-header">تازه ترین درایور ها</div>
                    <ul class="list-group">
                        @foreach($dl_drivers as $driver)
                            <li class="list-group-item">
                                <a href="{{ asset('post/'.$driver->slug) }}">
                                    <h3 class="h4" title="{{ $driver->name }}">{{ $driver->name }}</h3>
                                    <span
                                        class="smaller-Text"> بروزرسانی : {{ verta($driver->updated_at)->format('%d %B %Y') }} </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
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
<script>
    function changStatus() {
        console.log('test');
        document.addEventListener('keydown', function (event) {
            // کد دکمه مد نظر را بررسی کنید
            if (event.keyCode === 13) { // کد 13 به معنای دکمه Enter است
                // پیدا کردن تگ div با استفاده از شناسه و مخفی کردن آن
                var div = document.getElementById('statusShow0');
                div.style.display = 'none';
            }
        });
    }
</script>
