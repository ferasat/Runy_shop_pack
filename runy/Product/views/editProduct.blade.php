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
            <form class="row " method="post" action="{{ asset('dashboard/product/edit/'.$product->id) }}"
                  enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="col-xl-8 mb-5">
                    <section class="scroll-section" id="listPost">

                        @livewire('admin.product.create.name-product' , ['product' => $product ] )

                        <div class="card mb-3 border-color-runy-primary">
                            <div class="card-header border-color-runy-primary">
                                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 4a2 2 0 0 1 2-2h8a1 1 0 0 1 .707.293l5 5A1 1 0 0 1 20 8v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm13.586 4L14 4.414V8h3.586zM12 4H6v16h12V10h-5a1 1 0 0 1-1-1V4zm-4 9a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1z" fill="#6c429a"></path></g></svg>
                                معرفی کوتاه
                            </div>
                            <div class="card-body">
                            <textarea class="form-control editor" id="editor1"
                                      name="shortDescription">{!! $product->shortDescription !!}</textarea>
                            </div>
                        </div>

                        <div class="card mb-3 border-color-runy-primary">
                            <div class="card-header border-color-runy-primary">
                                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 4a2 2 0 0 1 2-2h8a1 1 0 0 1 .707.293l5 5A1 1 0 0 1 20 8v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm13.586 4L14 4.414V8h3.586zM12 4H6v16h12V10h-5a1 1 0 0 1-1-1V4zm-4 9a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1z" fill="#6c429a"></path></g></svg>
                                توضیحات محصول
                            </div>
                            <div class="card-body">
                            <textarea class="form-control editor" id="editor2"
                                      name="texts">{!! $product->texts !!}</textarea>
                            </div>
                        </div>
                        @livewire('admin.product.create.info-product' , ['product' => $product ] )
                        @livewire('admin.product.create.product-feature' , ['product' => $product ] )
                        @livewire('admin.product.create.seo-product' , ['product' => $product ] )
                    </section>
                </div>
                <div class="col-xl-4 mb-5">
                    @livewire('admin.product.create.sidebar-product' , ['product' => $product ] )
                    <div class="card mt-5 border-color-runy-primary">
                        <div class="card-header border-color-runy-primary">تصویر شاخص</div>
                        <div class="card-body">
                            @if($product->pic !== null )
                                <img src="{{asset($product->pic)}}" class="card-img-top sh-19" alt="تصویر شاخص">
                            @endif
                            <label class="form-label">تصویر شاخص</label>
                            <input type="file" class="form-control border-color-runy-primary" name="picture">
                                <br>
                                <label class="form-label">آدرس تصویر را وارد کنید </label>
                            <input type="text" class="form-control border-color-runy-primary" name="pic_update">
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
    </script>
@endsection
