@extends('layout',['title'=>$title,'description'=>$description])

@section('content')
    <div class="container">

        <!-- Content Start -->
        <div class="row">
            <!-- Introduction Banner Start -->
            @livewire('user.auth.register')
            <!-- Introduction Banner End -->

        </div>
        <!-- Content End -->
    </div>
@endsection
