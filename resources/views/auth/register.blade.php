@extends('layouts.runyApp',['title'=>'عضویت','description'=>'عضویت در سایت فروشگاه ماشیون های اداری مرتضوی'])

@section('content')
    @livewire('user.theme.user-navbar-responsive')
    <div class="container">

        <!-- Content Start -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 py-5 bg-white rounded my-4">
                <!-- Introduction Banner Start -->
                @livewire('user.auth.register')
                <!-- Introduction Banner End -->
            </div>
        </div>
        <!-- Content End -->
    </div>

    @livewire('user.theme.user-footer')
@endsection
