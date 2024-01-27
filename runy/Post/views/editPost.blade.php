@extends('layouts.runyApp',['title'=>$title,'description'=>''])

@section('content')
    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div class="my-3 py-2 h4">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                             stroke="#6c429a">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="0.5"
                                      d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                      stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                    stroke="#6c429a" stroke-width="1.5"></path>
                                <path opacity="0.5"
                                      d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                      stroke="#6c429a" stroke-width="1.5"></path>
                            </g>
                        </svg>
                        ویرایش : {{ $post->name }}
                    </div>
                    <div class="my-3 py-2 h4 text-left">
                        <a class="badge text-primary p-2 "
                           @if($post->typePost == 'page') href="{{ asset(route('page.index')) }}"
                           @else href="{{ asset(route('post.index')) }}" @endif >
                            <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                        stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <g opacity="0.4">
                                        <path
                                            d="M9.00039 15.3802H13.9204C15.6204 15.3802 17.0004 14.0002 17.0004 12.3002C17.0004 10.6002 15.6204 9.22021 13.9204 9.22021H7.15039"
                                            stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.57 10.7701L7 9.19012L8.57 7.62012" stroke="#6c429a"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            بازگشت
                        </a>
                    </div>
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <form class="row " method="post" @if($post->typePost == 'page') action="{{ asset('/dashboard/page/edit') }}"
                  @else action="{{ asset('/dashboard/post/edit') }}" @endif enctype="multipart/form-data">
                <input type="hidden" name="post_id" value="{{$post->id}}">
                @csrf
                <div class="col-xl-8 mb-5">
                    @livewire('admin.post.edit.name-slug' , ['post' => $post])

                    <div class="card mt-5">
                        <div class="card-header">
                            متن نوشته
                        </div>
                        <div class="card-body">
                            <div class="mb-3">

                                <textarea class="form-control editor" id="editor1"
                                          name="texts">{!! $post->texts !!}</textarea>
                                @error('texts') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    @livewire('admin.post.edit.seo' , ['post' => $post])

                </div>
                <div class="col-xl-4 mb-5">
                    @livewire('admin.post.edit.status' , ['post' => $post])

                    @livewire('admin.post.edit.pic' , ['post' => $post])

                    @if($post->typePost == 'post')
                        @livewire('admin.post.edit.category' , ['post' => $post])
                    @endif
                </div>
            </form>
            <!-- Content End -->
        </div>
    </div>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        var editor = CKEDITOR.replace('texts', {
            language: 'fa',
            filebrowserUploadUrl: "{{route('uploadCK' , ['_token' => csrf_token()])}}",
            filebrowserBrowseUrl: '/browser/',
            filebrowserUploadMethod: "form"
        });
    </script>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
