@extends('layouts.runyApp',['title'=>$title,'description'=>'ویرایش نظرسنجی' , 'editor' => true])

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
            @livewire('admin.poll.edit.edit-poll' , ['question' => $question ] )

            <!-- Content Start -->



            <!-- Content End -->
        </div>

    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])


@endsection
