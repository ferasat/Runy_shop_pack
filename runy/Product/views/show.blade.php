@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @include('layouts.main-header')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>

                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row">
            <div class="col-12 col-lg-6 mb-5">
                @livewire('user.product.show.picture' , ['product'=>$product])
            </div>
            <div class="col-12 col-lg-6 mb-5">
                @livewire('user.product.show.short-description' , ['product'=>$product])
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mb-5">
                @livewire('user.product.show.description' , ['product'=>$product])
            </div>
        </div>

        <!-- Content End -->
    </div>
    @livewire('user.product.show.single-product' , compact('product' , 'breadcrumbs'))

    @livewire('user.theme.user-footer')

@endsection
