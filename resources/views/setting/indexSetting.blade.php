@extends('layouts.runyApp',['title'=>$title,'description'=>$description])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <main class="dashboard-setting-page ">
            <div class="container  mt-5">

                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row ">
                            <!-- public-setting Start -->
                            @livewire('admin.setting.public-setting')
                            <!-- public-setting End -->
                        </div>
                    </div>
                    @livewire('admin.theme.sidebar.sidebar-admin-setting')
                </div>

                <div class="row">
                    @livewire('admin.setting.home-setting' , key(time()) )
                </div>

                <div class="row">
                    @livewire('admin.setting.theme-setting')
                </div>
            </div>
        </main>
    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
