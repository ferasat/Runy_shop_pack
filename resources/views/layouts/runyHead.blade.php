{{-- ckeditor --}}
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

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Store",
      "image": [
        "https://dlruny.mortazavistore.ir/shop/d47edc9c-9806-4b90-a5a5-e82dc81222ab.jpg",
        "https://dlruny.mortazavistore.ir/shop/photo_2023-03-12_20-39-17.jpg",
       ],
      "name": "ماشین های اداری مرتضوی نمایندگی برادر Brother",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": " چهاراه, فرشادی، ماشین های اداری مرتضوی, MM2J+MW7, Iran",
        "addressLocality": "Isfahan",
        "addressCountry": "IR"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "سید محمد مرتضوی"
        }
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 32.6516715,
        "longitude": 51.6823018
      },
      "url": "https://mortazavistore.ir/",
      "telephone": "09129259317",
      "priceRange": "$100",
      "product": "پرینتر و ماشین های اداری",

    }
</script>
