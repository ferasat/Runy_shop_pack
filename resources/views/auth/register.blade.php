@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
$title = 'ثبت نام در سامانه';
$description= 'ثبت نام در سامانه';
$breadcrumbs = ["/"=>"Home"]
@endphp
@extends('layout',[

'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/horizontal.js') }}"></script>
@endsection

@section('content')
    <div class="container">

        <!-- Content Start -->
        <div class="row">
            <!-- Introduction Banner Start -->
            @livewire('auth.register')
            <!-- Introduction Banner End -->

        </div>
        <!-- Content End -->
    </div>
@endsection
