@extends('layouts.runyApp' , ['title'=>setting_site()->site_name])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.home.slide.slide-show')
    @livewire('user.home.why-us')
    @livewire('user.home.recent-category-products')
    @livewire('user.home.features')
    @livewire('user.home.category-service')
    @livewire('user.home.mag')

    @livewire('user.theme.user-footer')

@endsection
