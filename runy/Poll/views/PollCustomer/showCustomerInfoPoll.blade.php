@extends('layouts.runyApp',['title'=>$pollTemp->name])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.poll.show-customer-info-poll' , compact('pollTemp','breadcrumbs'))

    @livewire('user.theme.user-footer')

@endsection
