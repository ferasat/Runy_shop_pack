@extends('layouts.runyApp',['title'=>'پیشخوان','description'=>'پیشخوان'])

@section('content')

    @livewire('user.theme.user-navbar-responsive')
    @livewire('user.user-dashboard.user-dashboard-index')
    @livewire('user.theme.user-footer')
@endsection
