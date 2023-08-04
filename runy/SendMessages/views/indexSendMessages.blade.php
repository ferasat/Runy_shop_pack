@extends('layouts.runyApp',['title'=>'محصولات','description'=>'محصولات'])

@section('content')
    <!-- responsive-header For mobile-->
    @livewire('admin.theme.admin-navbar-responsive' , ['menu'=>'cp'])
    <!-- responsive-header -->

    <div class="wrapper default ">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ 'پیام ها' }}</h1>
                    </div>
                    <!-- Title End -->
                </div>
                @livewire('admin.send-messages.index-send-messages' )

            </div>

        </div>

    </div>




@endsection
