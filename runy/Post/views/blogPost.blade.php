@extends('layouts.runyApp',['title'=>'وبلاگ','description'=>'وبلاگ'])

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">صفحه تخصصی دانلود درایور</h1>

                    <h6 class="text-center">کاملترین سایت درایور</h6>

                    <form  class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                        <div class="input-group input-group-lg">
                            <input name="keyword" type="search" class="form-control" id="keyword" placeholder="دنبال چی میگردی؟" aria-label="Search">

                            <button type="submit" class="btn btn-outline-primary ">جستجو</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
