@extends('layouts.runyApp',[ 'title'=>$title, 'description'=>'' ])

@section('content')
    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <div class="container">

            <!-- Content Start Index Customer In Dashboard -->
            @if(\Illuminate\Support\Facades\Auth::user()->levelPermission > 4)
                @livewire('admin.requests.index-requests')
            @else
                @livewire('user.requests.index-request')
            @endif

            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
