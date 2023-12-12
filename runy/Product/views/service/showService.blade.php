@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.service.service' , compact('service' , 'breadcrumbs'))

    @livewire('user.theme.user-footer')

@endsection
