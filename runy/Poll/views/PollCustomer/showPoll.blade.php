@extends('layouts.runyApp',['title'=>$poll->name])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.poll.show-poll', ['poll'=>$poll])

    @livewire('user.theme.user-footer')

@endsection
