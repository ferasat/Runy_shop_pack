@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <!-- main -->
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            @foreach($breadcrumbs as $index=>$breadcrumb)
                                <li>
                                    <a href="{{ asset($index) }}"><span>{{ $breadcrumb }}</span></a>
                                </li>
                            @endforeach

                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="col-md-12">

                        <div class="card mb-3">
                            <img src="{{asset($post->pic)}}" class="card-img-top" alt="">
                            <div class="card-header">
                                <h1 class="entry-title h1" title="">
                                    {{$post->name}}
                                </h1>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {!! $post->texts !!}
                                </p>
                                <p class="card-text">
                                    <small class="text-body-secondary">آخرین بروزرسانی @if($post->updated_at) {{$post->updated_at}}@else
                                    {{$post->created_at}} @endif</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main -->
    @livewire('user.post.recent-post' , ['place'=>'post'])
    @livewire('user.home.category-service')
    @livewire('user.theme.user-footer')
@endsection
