@extends('layouts.runyApp',[ 'title'=>'مدیریت فایل ها', 'description'=>'' ])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <form class="row g-3 p-5" method="post" action="{{ asset(route('file.upload')) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="fileName" class="form-label">نام فایل</label>
                    <input type="text" class="form-control" id="fileName" name="fileName">
                </div>
                <div class="col-md-6">
                    <label for="file" class="form-label">فایل</label>
                    <input class="form-control" type="file" id="file" name="file">
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">شرح</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="توضحی کوتاه اگر لازم هست">
                </div>


                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-outline-primary bg-white-rounded-in-hover">
                        <svg class="icon-svg-panel-sm " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        بارگزاری
                    </button>
                </div>
            </form>
        </div>

        @livewire('admin.runy-file-manager.files-index' )

    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

@endsection
