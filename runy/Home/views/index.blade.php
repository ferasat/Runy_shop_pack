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
    <script src="{{asset('js/vendor/glide.min.js')}}"></script>
    <script src="{{ asset('js/cs/glide.custom.js') }}"></script>
    <!-- Owl Start -->
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <!-- Owl End -->
@endsection

@section('content')
    <div class="container">
        <!-- Content Start -->
        @livewire('user.home.section-one')
        @livewire('user.home.section-two')
        @livewire('user.home.section-four')
        @livewire('user.home.section-three')
        @livewire('user.home.section-five')
        <!-- Content End -->
    </div>
    @include('_layout.runy_footer')
@endsection
