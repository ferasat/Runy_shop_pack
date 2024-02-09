{{-- TarahSite Template --}}
@if(isset($editor))
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <!--    <script src="{{ asset('theme/plugins/CkEditor/ckeditor.js') }}"></script>-->
@endif

@if(isset($owl_carousel))
    <link rel="stylesheet" href="{{ asset('theme/plugins/owl_carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/owl_carousel/dist/assets/owl.theme.default.min.css') }}">

    <script src="{{ asset('theme/plugins/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/owl_carousel/dist/owl.carousel.min.js') }}"></script>
@endif

