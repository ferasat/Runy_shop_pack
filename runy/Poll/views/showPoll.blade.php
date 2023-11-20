@extends('layouts.runyApp',['title'=>$poll->subject])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.poll.show-poll' , compact('poll' , 'breadcrumbs'))

    @livewire('user.theme.user-footer')

@endsection
