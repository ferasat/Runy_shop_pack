@extends('layout',[
'title'=>$cat->name,
'description'=>$cat->description
])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $cat->name }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        @livewire('user.product.category.show-cat' , ['cat'=>$cat])
        <!-- Content End -->
    </div>
    @include('_layout.runy_footer')
@endsection

@section('content')
    <script src="{{ asset('/js/pages/horizontal.js') }}"></script>
@endsection
