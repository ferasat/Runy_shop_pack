@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    @livewire('user.theme.user-navbar-responsive')

    <div class="container-fluid" itemscope itemtype="https://schema.org/Product">
        <main class="single-product">
            <div class="container">
                @livewire('user.theme.breadcrumbs' , compact('breadcrumbs') )
                @livewire('user.requests.fix-request-gust')
            </div>
        </main>
    </div>

@endsection
