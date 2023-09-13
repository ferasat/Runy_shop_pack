{{-- ckeditor --}}
@if(isset($editor))
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
@endif

@if(isset($owl_carousel))
<link rel="stylesheet" href="{{ asset('theme/plugins/owl_carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/plugins/owl_carousel/dist/assets/owl.theme.default.min.css') }}">

<script src="{{ asset('theme/plugins/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('theme/plugins/owl_carousel/dist/owl.carousel.min.js') }}"></script>
@endif
