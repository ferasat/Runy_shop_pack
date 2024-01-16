@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    <div class="wrapper h-auto">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <div class="my-4 h4" id="title">باشگاه مشتریان</div>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start Index Customer In Dashboard -->
            @livewire('admin.customer.index-customer')
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
