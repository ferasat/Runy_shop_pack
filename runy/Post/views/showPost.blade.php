@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <!-- main -->
    <main class="single-post">
        <div class="container">
            <div class="row">

                <div class="col-12 pt-5">
                    @php $x=1; $y=count($breadcrumbs) @endphp
                    <ul class="breadcrumb">
                        @foreach($breadcrumbs as $index=>$breadcrumb)
                        <li class="breadcrumb__item @if($x == 1) breadcrumb__item-firstChild @elseif($x == $y) breadcrumb__item-lastChild @endif">
                            <a href="#">
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

            <div class="row">
                <div class="container">
                    <div class="col-md-12">

                        <div class="card mb-3">
                            <img src="{{asset($post->pic)}}" class="card-img-top" alt="{{$post->name}}">
                            <div class="card-header">
                                <h1 class="entry-title h3" title="{{$post->name}}">
                                    {{$post->name}}
                                </h1>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {!! $post->texts !!}
                                </p>
                                <p class="card-text">
                                    <small class="text-body-secondary">آخرین بروزرسانی @if($post->updated_at)
                                            {{$post->updated_at}}
                                        @else
                                            {{$post->created_at}}
                                        @endif</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main -->
    <div class="container">
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
                                <h4 class="h4">
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
        <div class="row btn-box ">
            <div class="col-12 text-center">
                <a class="btn btn-outline-primary w-25" href="{{ asset('/blog') }}">
                    مطالب بیشتر در مجله فناوری
                </a>
            </div>
        </div>
    </div>
    @livewire('user.home.category-service')
    @livewire('user.theme.user-footer')
@endsection
