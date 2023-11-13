@extends('layouts.runyApp',['title'=>'وبلاگ','description'=>'وبلاگ'])

@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <section class="" id="section_1">
        <div class="container">
            <div class="row">



            </div>
        </div>
    </section>

    <div class="container">
        @livewire('user.post.blog.blog')
    </div>
    @livewire('user.theme.user-footer')
@endsection
