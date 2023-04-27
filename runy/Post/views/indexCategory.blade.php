@extends('layouts.runyApp',[ 'title'=>'پست ها', 'description'=>'' ])
@section('content')
    @include('layouts.cp-header')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        @livewire('admin.post.category.index-category' , ['categories' => $categories , 'description' => $description])
        <!-- Content End -->
    </div>
    @include('layouts.cp-footer')
@endsection
