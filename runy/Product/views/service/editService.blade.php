@extends('layouts.runyApp',['title'=>$title,'description'=>'ویرایش محصول' , 'editor' => true])

@section('content')

    <div class="wrapper default">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h3 class="p-3" id="title">{{ $title }}</h3>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <form class="row " method="post" action="{{ asset('dashboard/service/edit/'.$service->id) }}"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="service_id" value="{{$service->id}}">
                <div class="col-xl-8 mb-5">
                    <section class="scroll-section" id="listPost">

                        @livewire('admin.service.create.name-service' , ['service' => $service ] )

                        <div class="card mb-3 border-runy-service">
                            <div class="card-header border-runy-service">معرفی کوتاه</div>
                            <div class="card-body">
                            <textarea class="form-control editor" id="editor2"
                                      name="shortDescription">{!! $service->shortDescription !!}</textarea>
                            </div>
                        </div>

                        <div class="card mb-3 border-runy-service">
                            <div class="card-header border-runy-service">توضیحات خدمت</div>
                            <div class="card-body">
                            <textarea class="form-control editor" id="editor1"
                                      name="texts">{!! $service->texts !!}</textarea>
                            </div>
                        </div>
                        @livewire('admin.service.create.info-service' , ['service' => $service ] )
                        @livewire('admin.service.create.runy-form-builder-service' , ['service' => $service ] )
                    </section>
                </div>
                <div class="col-xl-4 mb-5">
                    @livewire('admin.service.create.sidebar-service' , ['service' => $service ] )
                    <div class="card mt-5 border-runy-service">
                        <div class="card-header border-runy-service">تصویر شاخص</div>
                        <div class="card-body">
                            @if($service->pic !== null )
                                <img src="{{asset($service->pic)}}" class="card-img-top sh-19" alt="تصویر شاخص">
                            @endif
                            <label class="form-label">تصویر شاخص</label>
                            <input type="file" class="form-control border-runy-service" name="picture">
                        </div>
                    </div>

                </div>
            </form>
            <!-- Content End -->
        </div>

    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        var editor = CKEDITOR.replace('editor1', {
            language: 'fa',
            filebrowserUploadUrl: "{{route('uploadCK' , ['_token' => csrf_token()])}}",
            filebrowserBrowseUrl: '/browser/',
            filebrowserUploadMethod: "form"
        });
        var editor = CKEDITOR.replace('editor2', {
            language: 'fa',
            filebrowserUploadUrl: "{{route('uploadCK' , ['_token' => csrf_token()])}}",
            filebrowserBrowseUrl: '/browser/',
            filebrowserUploadMethod: "form"
        });
        var editor = CKEDITOR.replace('editor3', {
            language: 'fa',
            filebrowserUploadUrl: "{{route('uploadCK' , ['_token' => csrf_token()])}}",
            filebrowserBrowseUrl: '/browser/',
            filebrowserUploadMethod: "form"
        });
    </script>
@endsection
