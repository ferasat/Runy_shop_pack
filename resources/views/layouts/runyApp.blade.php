<!DOCTYPE html>
<html lang="fa" dir="rtl" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <meta name="description" content="چاپگر برادر اصفهان پرینتر برادر اصفهان نمایندگی برادر اصفهان پرینتر HP"/>
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}"/>
    @else
        <meta name="keywords" content="Brother | ساعت زن | HP | نمایندگی پرینتر اچ پی | نمایندگی پرینتر برادر | پرینتر اچ پی |پرینتر برادر"/>
    @endif

    <link rel="icon" type="image/png" sizes="60x60" href="{{ asset(setting_site()->site_icon) }}">
    <link rel="alternate" hreflang="fa-IR" href="https://mortazavistore.ir/"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.runyHead')

    @livewireStyles
</head>
<body class="index-page">

@yield('content')

@include('layouts.runyFooter')

@livewireScripts
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "{{ setting_site()->site_name }}",
  "url": "{{ setting_site()->site_url }}",
  "logo": "{{ setting_site()->site_logo }}",
  "description": "{{ setting_site()->site_short_description }}",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "{{ setting_site()->mobile_phone }}",
      "email": "info@"
    }
  ]
}
</script>
</body>
</html>
