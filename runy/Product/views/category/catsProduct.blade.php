@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    <!-- responsive-header For mobile-->

    <!-- responsive-header -->
    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
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
            @livewire('admin.product.category.index-cats')
            <!-- Content End -->
        </div>
    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
