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

                <div class="col-md-12">
                    <div class="card">
                        <img src="{{asset($post->pic)}}" class="card-img-top" alt="{{$post->name}}">
                    </div>
                    <div class="card my-3 shadow-sm">
                        <div class="card-header">
                            <h1 class="entry-title h3" title="{{$post->name}}" itemprop="name">
                                <a href="{{ asset('post/'.$post->slug) }}" itemprop="url">{{$post->name}}</a>
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
                                <h4 class="h4" title="{{ $post->name }}">
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
