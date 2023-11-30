@extends('layouts.runyApp',[ 'title'=>'مدیریت دستبندی ها', 'description'=>'مدیریت دستبندی ها' ])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="row ">
                <!-- Title Start -->
                <div class="col-8 d-flex justify-content-between">
                    <div class="my-3 py-2 h3">
                        <svg class="icon-svg-panel" fill="#6c429a" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>category--new-each</title><path d="M29,10H24v2h5v6H22v2h3v2.142a4,4,0,1,0,2,0V20h2a2.0027,2.0027,0,0,0,2-2V12A2.0023,2.0023,0,0,0,29,10ZM28,26a2,2,0,1,1-2-2A2.0027,2.0027,0,0,1,28,26Z"></path><path d="M19,6H14V8h5v6H12v2h3v6.142a4,4,0,1,0,2,0V16h2a2.0023,2.0023,0,0,0,2-2V8A2.0023,2.0023,0,0,0,19,6ZM18,26a2,2,0,1,1-2-2A2.0027,2.0027,0,0,1,18,26Z"></path><path d="M9,2H3A2.002,2.002,0,0,0,1,4v6a2.002,2.002,0,0,0,2,2H5V22.142a4,4,0,1,0,2,0V12H9a2.002,2.002,0,0,0,2-2V4A2.002,2.002,0,0,0,9,2ZM8,26a2,2,0,1,1-2-2A2.0023,2.0023,0,0,1,8,26ZM3,10V4H9l.0015,6Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                        مدیریت دستبندی نوشته ها
                    </div>
                    <div class="my-3 py-2 h4 text-left">

                    </div>
                </div>
                <!-- Title End -->
            </div>
            <!-- Title and Top Buttons End -->
            <!-- Content Start -->
            @livewire('admin.post.category.index-category' , ['categories' => $categories , 'description' => $description])
            <!-- Content End -->
        </div>
    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
