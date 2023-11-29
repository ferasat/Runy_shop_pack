@extends('layouts.runyApp',[ 'title'=>$title, 'description'=>'' ])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h3 class=" mt-2" id="title">{{ $title }}</h3>
                        <p class="mb-0">{{$description}} .</p>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start Index Post In Dashboard -->
            @livewire('admin.post.index-post' , ['type' => $type , 'description' => $description])
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
