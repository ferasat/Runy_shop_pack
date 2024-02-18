@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    @livewire('user.theme.user-navbar-responsive')

    <form class="container py-5" itemtype="https://schema.org/Service" method="post" action="">
        @livewire('user.theme.breadcrumbs' , compact('breadcrumbs'))

        <div class="row mb-4 rounded bg-white py-3 g-3">

            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">نام</label>
                <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">نام خانواد گی</label>
                <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">شماره تماس</label>
                <input type="number" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">آدرس</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="اصفهان ...">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">ثبت درخواست</button>
            </div>
        </div>
    </form>

    @livewire('user.theme.user-footer')

@endsection
