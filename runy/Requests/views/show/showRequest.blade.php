@extends('layouts.runyApp',[ 'title'=>$title, 'description'=>'' ])

@section('content')
    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
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

            <!-- Content Start Index Customer In Dashboard -->

            @if(\Illuminate\Support\Facades\Auth::user()->levelPermission > 2 )
                @livewire('admin.requests.show.show-request' , ['rqst'=>$rqst])
            @else
                @livewire('user.requests.show.show-request' , ['rqst'=>$rqst])
            @endif

            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
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
@endsection
