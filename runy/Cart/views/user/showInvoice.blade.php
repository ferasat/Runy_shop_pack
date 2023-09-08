@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.cart.show-invoice',compact('cart_id'))

    @livewire('user.theme.user-footer')

@endsection
