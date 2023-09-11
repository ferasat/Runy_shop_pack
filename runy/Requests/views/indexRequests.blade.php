@extends('layout',[
'title'=>$title,
'description'=>$description
])

@section('content')
    <div class="container">


        <!-- Content Start Index Customer In Dashboard -->
        @if(\Illuminate\Support\Facades\Auth::user()->levelPermission > 4)
            @livewire('admin.requests.index-requests')
        @else
            @livewire('user.requests.index-request')
        @endif

        <!-- Content End -->
    </div>
@endsection
