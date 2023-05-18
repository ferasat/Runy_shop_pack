@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.product.show.single-product' , compact('product' , 'breadcrumbs'))

    @livewire('user.theme.user-footer')

@endsection
