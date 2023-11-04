@extends('layouts.runyApp',['title'=>$title,'description'=>$title])

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

            <!-- Content Start -->
            <div class="row ">
                <div class="col-xl-8 mb-5">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="editor" class="form-label">متن</label>
                                <textarea class="form-control editor" id="editor"
                                          name="texts"></textarea>
                                @error('texts') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-5">
                    <div class="card mt-2">
                        <div class="card-header"></div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
