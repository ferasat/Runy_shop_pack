@extends('layouts.runyApp',['title'=>'وبلاگ','description'=>'وبلاگ'])

@section('content')
    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.post.blog.blog')

    @livewire('user.theme.user-footer')
@endsection
