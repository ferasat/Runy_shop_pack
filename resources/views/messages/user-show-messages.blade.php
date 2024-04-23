@extends('layouts.runyApp',['title'=>$message['title'],'description'=>$message['description']])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    <div class="container-fluid">
        <main class="my-5">
            <div class="container py-5">
                <div class="row py-5 my-5">
                    <div class="col-md-12 py-5 my-5">
                        <div class="card text-bg-info">
                            <div class="card-header"><h3>{{ $message['title'] }}</h3></div>
                            <div class="card-body">
                                <p class="card-text">{!! $message['description'] !!}</p>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @livewire('user.theme.user-footer')

@endsection
