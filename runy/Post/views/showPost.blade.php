@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @include('layouts.main-header')
    <!-- main -->
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><span>فروشگاه اینترنتی دیجی کالا</span></a>
                            </li>
                            <li>
                                <a href="#"><span>کالای دیجیتال</span></a>
                            </li>
                            <li>
                                <a href="#"><span>موبایل</span></a>
                            </li>
                            <li>
                                <a href="#"><span>گوشی موبایل</span></a>
                            </li>
                            <li>
                                <span>گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت</span>
                            </li>
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
    @include('layouts.main-footer')
@endsection
