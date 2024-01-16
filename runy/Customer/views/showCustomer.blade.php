@extends('layouts.runyApp',['title'=>$title,'description'=>$title])

@section('content')
    <div class="wrapper ">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <div class="container">
            <!-- Content Start -->
            @livewire('admin.customer.show.show-customer' , ['customer'=>$customer] )
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
