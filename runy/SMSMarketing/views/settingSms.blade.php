@extends('layouts.runyApp',['title'=>'تنظیمات پیامک','description'=>'تنظیمات پیامک'])

@section('content')
    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <main class="dashboard-setting-page ">
            <div class="container  mt-5">

                <div class="row">
                    @livewire('admin.setting.sms-setting')
                    @livewire('admin.theme.sidebar.sidebar-admin-setting')
                </div>
            </div>
        </main>

    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
