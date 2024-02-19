@extends('layouts.runyApp',[ 'title'=>$title, 'description'=>'' ])

@section('content')

    <div class="wrapper">
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

            <!-- Content Start Index Customer In Dashboard -->
            @livewire('admin.requests.department.index-department')
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
