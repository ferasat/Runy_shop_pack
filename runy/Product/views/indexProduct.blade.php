@extends('layouts.runyApp',['title'=>$title,'description'=>$title])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h3 class="my-3 py-2 h4" id="title">
                            <svg class="icon-svg-panel" fill="#000000" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="matrix(1,0,0,1,-144,-288)"> <g transform="matrix(1.2,0,0,1,-29.6,-3)"> <path d="M168,300L148,300L148,318C148,318.53 148.176,319.039 148.488,319.414C148.801,319.789 149.225,320 149.667,320C153.433,320 162.567,320 166.333,320C166.775,320 167.199,319.789 167.512,319.414C167.824,319.039 168,318.53 168,318C168,312.935 168,300 168,300Z" style="fill:#eeb9e7;"></path> </g> <path d="M148,297C148,297 149.581,293.839 150.447,292.106C150.786,291.428 151.479,291 152.236,291C155.527,291 164.473,291 167.764,291C168.521,291 169.214,291.428 169.553,292.106C170.419,293.839 172,297 172,297" style="fill:#eeb9e7;"></path> <path d="M167.764,290L152.236,290C151.1,290 150.061,290.642 149.553,291.658L147.115,296.535C147.041,296.674 147,296.832 147,297L147,315C147,315.796 147.316,316.559 147.879,317.121C148.441,317.684 149.204,318 150,318C154.52,318 165.48,318 170,318C170.796,318 171.559,317.684 172.121,317.121C172.684,316.559 173,315.796 173,315C173,309.935 173,297 173,297C173,296.832 172.959,296.674 172.885,296.535L170.447,291.658C169.939,290.642 168.9,290 167.764,290ZM164,298L164,301C164,301.53 163.789,302.039 163.414,302.414C163.039,302.789 162.53,303 162,303C160.89,303 159.11,303 158,303C157.47,303 156.961,302.789 156.586,302.414C156.211,302.039 156,301.53 156,301L156,298L149,298L149,315C149,315.265 149.105,315.52 149.293,315.707C149.48,315.895 149.735,316 150,316L170,316C170.265,316 170.52,315.895 170.707,315.707C170.895,315.52 171,315.265 171,315L171,298L164,298ZM152,314L154,314C154.552,314 155,313.552 155,313C155,312.448 154.552,312 154,312L152,312C151.448,312 151,312.448 151,313C151,313.552 151.448,314 152,314ZM152,310L156,310C156.552,310 157,309.552 157,309C157,308.448 156.552,308 156,308L152,308C151.448,308 151,308.448 151,309C151,309.552 151.448,310 152,310ZM162,301L158,301C158,301 158,298 158,298L162,298L162,301ZM163.18,292L163.847,296L170.382,296L168.658,292.553C168.489,292.214 168.143,292 167.764,292L163.18,292ZM156.82,292L152.236,292C151.857,292 151.511,292.214 151.342,292.553L149.618,296L156.153,296L156.82,292ZM158.18,296L158.847,292L161.153,292L161.82,296L158.18,296Z" style="fill:#6c429a;"></path> </g> </g></svg>
                            {{ $title }}
                        </h3>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            @livewire('admin.product.index-product' , ['description' => $description])
            <!-- Content End -->
        </div>
    </div>


    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
