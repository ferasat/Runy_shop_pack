@extends('layouts.runyApp',[ 'title'=>'پست ها', 'description'=>'' ])

@section('content')
    @include('layouts.cp-header')
    <div class="container-fluid">
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

        <!-- Content Start Index Post In Dashboard -->
        @livewire('admin.post.index-post' , ['type' => $type , 'description' => $description])
        <!-- Content End -->
    </div>
    @include('layouts.main-footer')
@endsection
