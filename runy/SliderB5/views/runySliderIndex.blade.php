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
                        مدیریت اسلایدر ها
                    </div>
                    <div class="my-3 py-2 h4 text-left">
                        <a class="badge text-primary p-2 " href="{{ asset(route('sliderB5.create')) }}">
                            <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M8 16H5.43C3.14 16 2 14.86 2 12.57V5.43C2 3.14 3.14 2 5.43 2H10C12.29 2 13.43 3.14 13.43 5.43" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18.5703 22H14.0003C11.7103 22 10.5703 20.86 10.5703 18.57V11.43C10.5703 9.14 11.7103 8 14.0003 8H18.5703C20.8603 8 22.0003 9.14 22.0003 11.43V18.57C22.0003 20.86 20.8603 22 18.5703 22Z" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <g opacity="0.4"> <path d="M14.8691 15H18.1291" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.5 16.6301V13.3701" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            ساخت اسلاید جدید
                        </a>
                    </div>
                </div>
                <!-- Title End -->
            </div>

            <!-- Content Start -->
            @livewire('admin.runy-slider-b5.index-slides' )
            <!-- Content End -->
        </div>
    </div>


    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
