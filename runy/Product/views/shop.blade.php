@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.product.shop' , compact('breadcrumbs') )

    @livewire('user.theme.user-footer')

@endsection
