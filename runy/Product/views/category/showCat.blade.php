@extends('layouts.runyApp',['title'=>$cat->name,'description'=>$cat->description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.product.category.show-cat' , ['cat'=>$cat])

    @livewire('user.theme.user-footer')

@endsection
