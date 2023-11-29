@extends('layouts.runyApp',['title'=>'وبلاگ','description'=>'وبلاگ'])

@section('content')
    @livewire('user.theme.user-navbar-responsive')

    @if(isset($statusBlog))
        @livewire('user.post.blog.blog' , ['posts_in_cat'=> $posts_in_cat , 'statusBlog'=> $statusBlog])
    @else
        @livewire('user.post.blog.blog')
    @endif

    @livewire('user.theme.user-footer')
@endsection
