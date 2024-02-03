@extends('layouts.runyApp',['title'=>$pollTemp->name])

@section('content')
<div class="wrapper ">
    @livewire('user.theme.user-navbar-responsive')

    @livewire('user.poll.show-customer-info-poll' , compact('pollTemp','breadcrumbs'))

    @livewire('user.theme.user-footer')
</div>
@endsection
