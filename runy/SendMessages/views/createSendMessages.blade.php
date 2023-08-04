@extends('layouts.runyApp',['title'=>$title,'description'=>'ایجاد پیام' , 'editor' => true])

@section('content')
    <!-- responsive-header For mobile-->
    @livewire('admin.theme.admin-navbar-responsive' , ['menu'=>'cp'])
    <!-- responsive-header -->

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h3 class="p-3" id="title">{{ $title }}</h3>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->
            <!-- Content Start -->
        @livewire('admin.send-messages.create.create-send-messages')
            <!-- Content End -->
        </div>

    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
