@extends('layouts.runyApp',['title'=>'مدیریت اسلاید ها','description'=>'مدیریت اسلاید ها'])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="row justify-content-center">
                <!-- Title Start -->
                <div class="col-8 d-flex justify-content-between">
                    <div class="my-3 py-2 h4">
                        <svg class="icon-svg-panel" fill="#6c429a" version="1.1" id="Icons"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier"
                                                                         stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M29,2H3C1.3,2,0,3.3,0,5v16c0,1.7,1.3,3,3,3h26c1.7,0,3-1.3,3-3V5C32,3.3,30.7,2,29,2z M7.7,14.3c0.4,0.4,0.4,1,0,1.4 C7.5,15.9,7.3,16,7,16s-0.5-0.1-0.7-0.3l-2-2c-0.4-0.4-0.4-1,0-1.4l2-2c0.4-0.4,1-0.4,1.4,0s0.4,1,0,1.4L6.4,13L7.7,14.3z M27.7,13.7l-2,2C25.5,15.9,25.3,16,25,16s-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l1.3-1.3l-1.3-1.3c-0.4-0.4-0.4-1,0-1.4 s1-0.4,1.4,0l2,2C28.1,12.7,28.1,13.3,27.7,13.7z"></path>
                                <circle cx="16" cy="28" r="2"></circle>
                                <circle cx="10" cy="28" r="2"></circle>
                                <circle cx="22" cy="28" r="2"></circle>
                            </g></svg>
                        ویرایش اسلاید : {{ $slide->name }}
                    </div>
                    <div class="my-3 py-2 h4 text-left">
                        <a class="badge text-primary p-2 " href="{{ asset(route('sliderB5.index')) }}">
                            <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <g opacity="0.4"> <path d="M9.00039 15.3802H13.9204C15.6204 15.3802 17.0004 14.0002 17.0004 12.3002C17.0004 10.6002 15.6204 9.22021 13.9204 9.22021H7.15039" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.57 10.7701L7 9.19012L8.57 7.62012" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            بازگشت
                        </a>
                    </div>
                </div>
                <!-- Title End -->
            </div>

            <!-- Content Start -->
            @livewire('admin.runy-slider-b5.edit-slide' , [ 'slide'=>$slide ] )
            <!-- Content End -->
        </div>
    </div>


    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
