@extends('layout',[
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/horizontal.js') }}" xmlns:wire="http://www.w3.org/1999/xhtml"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class=" d-flex justify-content-between">
            <div class="card-body">
                <p class="mb-0">{{$description}} .</p>
            </div>

            <button class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                     class="cs-icon cs-icon-more-horizontal">
                    <path
                        d="M9 10C9 9.44772 9.44772 9 10 9V9C10.5523 9 11 9.44772 11 10V10C11 10.5523 10.5523 11 10 11V11C9.44772 11 9 10.5523 9 10V10zM2 10C2 9.44772 2.44772 9 3 9V9C3.55228 9 4 9.44772 4 10V10C4 10.5523 3.55228 11 3 11V11C2.44772 11 2 10.5523 2 10V10zM16 10C16 9.44772 16.4477 9 17 9V9C17.5523 9 18 9.44772 18 10V10C18 10.5523 17.5523 11 17 11V11C16.4477 11 16 10.5523 16 10V10z"></path>
                </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow" style="">
                <a class="dropdown-item" href="{{ asset(route('post.index')) }}">نوشته ها</a>
                <a class="dropdown-item" href="{{ asset(route('post.index')) }}">نوشته های برای بررسی</a>
                <div class="dropdown-divider"></div>
            </div>
        </div>

        <form class="row " method="post" action="{{ asset('/dashboard/post/edit') }}" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="{{$post->id}}">
            @csrf
            <div class="col-xl-8 mb-5">
                @livewire('admin.post.edit.name-slug' , ['post' => $post])

                <div class="card mt-5">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="editor" class="form-label">متن</label>
                            <textarea class="form-control editor" id="editor" name="texts">{!! $post->texts !!}</textarea>
                            @error('texts') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                @livewire('admin.post.edit.seo' , ['post' => $post])

            </div>
            <div class="col-xl-4 mb-5">
                @livewire('admin.post.edit.status' , ['post' => $post])

                @livewire('admin.post.edit.pic' , ['post' => $post])


                <div class="card mt-2">
                    <div class="card-header"></div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </form>
        <!-- Content End -->
    </div>
@endsection
