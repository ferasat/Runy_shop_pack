@extends('layouts.runyApp',[
'title'=>'محصولات',
'description'=>'محصولات'
])

@section('content')
    @include('layouts.cp-header')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ 'محصولات' }}</h1>

                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        @livewire('admin.product.index-product' , ['products' => $products , 'description' => $description])
        <!-- Content End -->
    </div>
    @include('layouts.main-footer')
@endsection
