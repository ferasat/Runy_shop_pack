@extends('layouts.runyApp',['title'=>$title,'description'=>$description])
@section('content')
    <!-- responsive-header For mobile-->

    <!-- responsive-header -->
    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <div class="container">

                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 d-flex justify-content-between">
                        <div class="my-1 py-1 h3 " id="title">{{ $title }}</div>
                        <div class="my-1 py-1 h4 text-left">
                            <a class="badge text-primary p-2 " href="{{ asset(route('product.index')) }}">
                                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <g opacity="0.4"> <path d="M9.00039 15.3802H13.9204C15.6204 15.3802 17.0004 14.0002 17.0004 12.3002C17.0004 10.6002 15.6204 9.22021 13.9204 9.22021H7.15039" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.57 10.7701L7 9.19012L8.57 7.62012" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                بازگشت
                            </a>
                        </div>
                    </div>
                    <!-- Title End -->
                </div>


            <!-- Content Start -->
            @livewire('admin.product.category.index-cats' , compact('breadcrumbs'))
            <!-- Content End -->
        </div>
    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
