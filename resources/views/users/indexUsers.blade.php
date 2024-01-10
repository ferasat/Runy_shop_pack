@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">

            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h3 class="mt-3" id="title">{{ $title }}</h3>
                </div>
                <!-- Title End -->
            </div>

            <div class="row">
                @livewire('admin.user.index-users')
            </div>

        </div>
    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
