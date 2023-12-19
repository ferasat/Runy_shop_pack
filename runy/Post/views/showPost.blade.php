@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <!-- main -->
    <main class="single-post">
        <div class="container">
            <div class="row">

                <div class="col-12 mt-5">
                    @php $x=1; $y=count($breadcrumbs) @endphp
                    <ul class="breadcrumb">
                        @foreach($breadcrumbs as $index=>$breadcrumb)
                            <li class="breadcrumb__item @if($x == 1) breadcrumb__item-firstChild @elseif($x == $y) breadcrumb__item-lastChild @endif">
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

            <div class="row " itemscope itemtype="https://schema.org/BlogPosting"
                 itemid="{{ asset('post/'.$post->slug) }}">
                <meta itemprop="wordCount" content="{{ str_word_count($post->texts) }}">

                <div class="col-md-9">
                    <div class="card">
                        <img src="{{asset($post->pic)}}" class="card-img-top" alt="{{$post->name}}">
                    </div>
                    <div class="card my-3 shadow-sm">
                        <div class="card-header">
                            <h1 class="entry-title" title="{{$post->name}}" itemprop="name">
                                <a href="{{ asset('post/'.$post->slug) }}" itemprop="url">{{$post->name}}</a>
                                @if(Auth::check()) <a class="badge bg-warning smaller-Text text-danger" href="{{ asset('dashboard/post/edit/'.$post->id) }}" >ویرایش</a> @endif
                            </h1>
                        </div>
                        <div class="card-body textBodyRuny">
                            <p class="card-text" itemprop="articleBody">
                                {!! $post->texts !!}
                            </p>

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
                                <a target="_blank" href="{{ asset('/p/'.$post->id) }}">لینک کوتاه</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg- mb-5 sticky-top shadow-sm sidebar_card">
                        <div class="card-header">
                            <svg class="icon-svg-panel" fill="#ff4d4d" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_1960_" d="M76,2H16c-2.2,0-4,1.8-4,4v80c0,2.2,1.8,4,4,4h60c2.2,0,4-1.8,4-4V6C80,3.8,78.2,2,76,2z M72,82H20V10h52 V82z M28.5,65c0-2.2,1.8-4,4-4h27c2.2,0,4,1.8,4,4s-1.8,4-4,4h-27C30.3,69,28.5,67.2,28.5,65z M29.1,46c0-2.2,1.8-4,4-4h26.3 c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1C30.9,50,29.1,48.2,29.1,46z M29.1,27c0-2.2,1.8-4,4-4h26.3c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1 C30.9,31,29.1,29.2,29.1,27z"></path> </g></svg>
                            تازه ها</div>
                        @foreach(recentPosts(7) as $repost)
                            <div class="row g-0 sh-10 mt-1">
                                <div class="col-3 col-sm-3 p-2">
                                    <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                                         class="card-img card-img-horizontal">
                                </div>
                                <div class="col-9 col-sm-9 p-2">
                                    <div class="d-flex flex-column">
                                        <h4 class="font-size-14" title="{{$repost->name}}"><a class="heading mb-0 pe-2"
                                                                         href="{{asset('post/'.$repost->slug)}}">{{$repost->name}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="card-footer text-left">
                            <a href="{{ asset('/blog') }}" class="btn btn-outline-primary">مشاهده همه</a>
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
