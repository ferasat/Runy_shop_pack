@extends('layouts.runyApp',['title'=>'تنظیمات عمومی سئو','description'=>'تنظیمات عمومی سئو'])

@section('content')
    <!-- responsive-header For mobile-->
    @livewire('admin.theme.admin-navbar-responsive' , ['menu'=>'cp'])
    <!-- responsive-header -->

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 py-2" id="title">{{ 'تنظیمات عمومی سئو' }}</h1>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 mb-5">
                    <form class="scroll-section" method="post" action="{{ asset(route('runy_seo_save')) }}">
                        @csrf
                        <div class="card mb-3">
                            <div class="card-body mb-n2 border-last-none h-100">

                                <div class="row mb-3">
                                    <label for="site_name" class="col-sm-2 col-form-label">نام سایت</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="site_name" name="site_name"  value="{{$seo_public->site_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name_home_page" class="col-sm-2 col-form-label">عنوان صفحه اول</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name_home_page"
                                               name="name_home_page"  value="{{$seo_public->name_home_page}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description_home_page" class="col-sm-2 col-form-label">توضیحات صفحه اول
                                        سایت</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="description_home_page"
                                               name="description_home_page"  value="{{$seo_public->description_home_page}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="keyword_home_page" class="col-sm-2 col-form-label">کلمات کلیدی صفحه اول سایت</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="keyword_home_page"
                                               name="keyword_home_page" value="{{$seo_public->keyword_home_page}}">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body mb-n2 border-last-none h-100">

                                <div class="row mb-3">
                                    <label for="site_scripts" class="col-sm-2 col-form-label">اسکریپت ها</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="site_scripts" name="site_scripts">
                                            {!! $seo_public->site_scripts !!}
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Content End -->
        </div>
    </div>


    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
