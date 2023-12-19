@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <!-- main -->
    <main class="single-post">
        <div class="container">
            <div class="row">

                <div class="col-12 mt-3">
                    @php $x=1; $y=count($breadcrumbs) @endphp
                    <ul class="breadcrumb">
                        @foreach($breadcrumbs as $index=>$breadcrumb)
                            <li class="breadcrumb__item ">
                                <a href="{{ asset($index) }}">
                                    <span class="breadcrumb__inner">
                                        <span class="breadcrumb__title">{{ $breadcrumb }}</span>
                                        @if($x !== $y) <span> / </span> @endif
                                    </span>
                                </a>
                            </li>
                            @php $x++; @endphp
                        @endforeach
                    </ul>


                </div>
            </div>


            <div class="row" itemscope itemtype="https://schema.org/BlogPosting"
                 itemid="{{ asset('post/'.$post->slug) }}">
                <meta itemprop="wordCount" content="{{ str_word_count($post->texts) }}">
                <div class="col-md-4 mb-5">
                    <div class="card ">
                        <img src="{{asset($post->pic)}}" class="card-img" alt="{{$post->name}}">
                    </div>
                </div>
                <div class="col-md-8 mb-5">

                    <div class="card mb-3 shadow-sm">
                        <div class="card-header bg-white">
                            <h1 class="entry-title h3" title="{{$post->name}}" itemprop="name">
                                <a href="{{ asset('post/'.$post->slug) }}" itemprop="url">{{$post->name}}</a>
                                @if(Auth::check()) <a class="badge bg-warning smaller-Text text-danger" href="{{ asset('dashboard/post/edit/'.$post->id) }}" >ویرایش</a> @endif
                            </h1>

                        </div>
                        <div class="card-body textBodyRuny">
                            <p class="card-text" itemprop="articleBody">
                                {!! $post->texts !!}
                            </p>

                        </div>
                        <div class="card-body row d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="download_box border border-2 border-color-red-mor rounded">
                                    <div class="box_title border-bottom bg-mute-red-mor p-2">باکس دانلود</div>
                                    <div class="box_body p-2">
                                        <ul class="list-group">
                                            @foreach($files as $file)
                                                <li class="list-item">
                                                    <a href="{{ $file->path }}" class="">
                                                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                               stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10V11H17C18.933 11 20.5 12.567 20.5 14.5C20.5 16.433 18.933 18 17 18H16.9C16.3477 18 15.9 18.4477 15.9 19C15.9 19.5523 16.3477 20 16.9 20H17C20.0376 20 22.5 17.5376 22.5 14.5C22.5 11.7793 20.5245 9.51997 17.9296 9.07824C17.4862 6.20213 15.0003 4 12 4C8.99974 4 6.51381 6.20213 6.07036 9.07824C3.47551 9.51997 1.5 11.7793 1.5 14.5C1.5 17.5376 3.96243 20 7 20H7.1C7.65228 20 8.1 19.5523 8.1 19C8.1 18.4477 7.65228 18 7.1 18H7C5.067 18 3.5 16.433 3.5 14.5C3.5 12.567 5.067 11 7 11H8V10ZM13 11C13 10.4477 12.5523 10 12 10C11.4477 10 11 10.4477 11 11V16.5858L9.70711 15.2929C9.31658 14.9024 8.68342 14.9024 8.29289 15.2929C7.90237 15.6834 7.90237 16.3166 8.29289 16.7071L11.2929 19.7071C11.6834 20.0976 12.3166 20.0976 12.7071 19.7071L15.7071 16.7071C16.0976 16.3166 16.0976 15.6834 15.7071 15.2929C15.3166 14.9024 14.6834 14.9024 14.2929 15.2929L13 16.5858V11Z"
                                                                      fill="#ff4747"></path>
                                                            </g>
                                                        </svg>
                                                        {{ $file->filename }} |
                                                        حجم : {{ $file->size }}

                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-body-secondary">آخرین بروزرسانی @if($post->updated_at)
                                        {{ verta($post->updated_at)->format('%d %B %Y') }}
                                    @else
                                        {{$post->created_at}}
                                    @endif
                                </small>
                                |
                                <a target="_blank" href="{{ asset('/p/'.$post->id) }}">لینک اشتراک گذاری</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>
    <!-- main -->

    @livewire('user.home.category-service')
    <div class="container py-5">
        <div class="row section-header ">
            <span>مجله فناوری</span>
            <h5 class="h2">مجله فناوری</h5>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{ asset('post/'.$post->slug) }}" title="{{ $post->name }}">
                            <img class="card-img-top" src="{{ asset($post->pic) }}" alt="{{ $post->name }}">
                        </a>
                        <div class="card-body">
                            <div class="detail-box">
                                <h4 class="font-size-12" title="{{ $post->name }}">
                                    <a class="" href="{{ asset('post/'.$post->slug) }}" title="{{ $post->name }}">
                                        {{ $post->name }}
                                    </a>
                                </h4>
                                <div class="small">
                                    <span>{{ verta($post->updated_at)->format('%d %B %Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row btn-box py-4">
            <div class="col-12 text-center">
                <a class="btn btn-outline-primary w-25" href="{{ asset('/blog') }}">
                    مطالب بیشتر در مجله فناوری
                </a>
            </div>
        </div>
    </div>
    @livewire('user.theme.user-footer')
@endsection
