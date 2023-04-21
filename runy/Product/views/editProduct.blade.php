@extends('layouts.runyApp',[
'title'=>$title,
'description'=>'ویرایش محصول'
])


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
        <form class="row " method="post" action="{{ asset('dashboard/product/edit/'.$product->id) }}"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="col-xl-8 mb-5">
                <section class="scroll-section" id="listPost">

                    @livewire('admin.product.create.name-product' , ['product' => $product ] )

                    <div class="card mb-3">
                        <div class="card-header">معرفی کوتاه</div>
                        <div class="card-body">
                            <textarea class="form-control editor" id="editor2"
                                      name="shortDescription">{!! $product->shortDescription !!}</textarea>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">توضیحات محصول</div>
                        <div class="card-body">
                            <textarea class="form-control editor" id="editor"
                                      name="texts">{!! $product->texts !!}</textarea>
                        </div>
                    </div>
                    @livewire('admin.product.create.info-product' , ['product' => $product ] )
                </section>
            </div>
            <div class="col-xl-4 mb-5">
                @livewire('admin.product.create.sidebar-product' , ['product' => $product ] )
                <div class="card mt-5">
                    <div class="card-body">
                        @if($product->pic !== null )
                            <img src="{{asset($product->pic)}}" class="card-img-top sh-19">
                        @endif
                        <label class="form-label">تصویر شاخص</label>
                        <input type="file" class="form-control" name="picture">
                    </div>
                </div>

            </div>
        </form>
        <!-- Content End -->
    </div>
    @include('layouts.main-footer')
    <script>
        class MyUploadAdapter {
            constructor(loader) {
                // The file loader instance to use during the upload.
                this.loader = loader;
            }

            // Starts the upload process.
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            // Aborts the upload process.
            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            // Initializes the XMLHttpRequest object using the URL passed to the constructor.
            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();

                // Note that your request may look different. It is up to you and your editor
                // integration to choose the right communication channel. This example uses
                // a POST request with JSON as a data structure but your configuration
                // could be different.
                xhr.open('POST', '{{route('post.image.upload' , [ '_token' => csrf_token() ] )}}', true);
                xhr.responseType = 'json';
            }

            // Initializes XMLHttpRequest listeners.
            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${file.name}.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    // This example assumes the XHR server's "response" object will come with
                    // an "error" which has its own "message" that can be passed to reject()
                    // in the upload promise.
                    //
                    // Your integration may handle upload errors in a different way so make sure
                    // it is done properly. The reject() function must be called when the upload fails.
                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    // If the upload is successful, resolve the upload promise with an object containing
                    // at least the "default" URL, pointing to the image on the server.
                    // This URL will be used to display the image in the content. Learn more in the
                    // UploadAdapter#upload documentation.
                    resolve({
                        default: response.url
                    });
                });

                // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                // properties which are used e.g. to display the upload progress bar in the editor
                // user interface.
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            // Prepares the data and sends the request.
            _sendRequest(file) {
                // Prepare the form data.
                const data = new FormData();

                data.append('upload', file);

                // Important note: This is the right place to implement security mechanisms
                // like authentication and CSRF protection. For instance, you can use
                // XMLHttpRequest.setRequestHeader() to set the request headers containing
                // the CSRF token generated earlier by your application.

                // Send the request.
                this.xhr.send(data);
            }
        }

        // ...

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                // Configure the URL to the upload script in your back-end here!
                return new MyUploadAdapter(loader);
            };
        }

        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'fa'
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'), {
                language: 'fa'
            })
            .then(editor2 => {
                console.log(editor2);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
