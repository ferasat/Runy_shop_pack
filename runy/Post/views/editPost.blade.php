@extends('layouts.runyApp',['title'=>$title,'description'=>''])

@section('content')
    @include('layouts.cp-header')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
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


        </div>

        <form class="row " method="post" @if($post->typePost == 'page') action="{{ asset('/dashboard/page/edit') }}" @else action="{{ asset('/dashboard/post/edit') }}" @endif enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="{{$post->id}}">
            @csrf
            <div class="col-xl-8 mb-5">
                @livewire('admin.post.edit.name-slug' , ['post' => $post])

                <div class="card mt-5">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="texts" class="form-label">متن</label>
                            <textarea class="form-control editor" id="texts" name="texts">{!! $post->texts !!}</textarea>
                            @error('texts') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                @livewire('admin.post.edit.seo' , ['post' => $post])

            </div>
            <div class="col-xl-4 mb-5">
                @livewire('admin.post.edit.status' , ['post' => $post])

                @livewire('admin.post.edit.pic' , ['post' => $post])

                @livewire('admin.post.edit.category' , ['post' => $post])

            </div>
        </form>
        <!-- Content End -->
    </div>
    <script>
        $('#texts').summernote({
            placeholder: 'سلام به رانی خوش آمدید',
            tabsize: 2,
            height: 320,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
    @include('layouts.cp-footer')
@endsection
