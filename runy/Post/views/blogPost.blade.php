@extends('layouts.runyApp',['title'=>'وبلاگ','description'=>'وبلاگ'])

@section('content')
    @livewire('user.theme.user-navbar-responsive')

    @if(isset($statusBlog))
        @livewire('user.post.blog.blog' , ['cat_id'=> $cat_id , 'statusBlog'=> $statusBlog])
    @else
        @livewire('user.post.blog.blog')
    @endif

    @livewire('user.theme.user-footer')
@endsection
