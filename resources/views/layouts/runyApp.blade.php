<!DOCTYPE html>
<html lang="fa" dir="rtl" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ setting_site()->site_short_description }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}"/>
    @else
        <meta name="keywords" content="Brother | ساعت زن | HP | نمایندگی پرینتر اچ پی | نمایندگی پرینتر برادر | پرینتر اچ پی |پرینتر برادر"/>
    @endif

    <link rel="icon" type="image/png" sizes="60x60" href="{{ asset(setting_site()->site_icon) }}">
    <link rel="alternate" hreflang="fa-IR" href="{{ asset(setting_site()->site_url) }}"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if(setting_site()->front_theme == 'tarahsite')
        @include('layouts.tarahsite.runyHeadTarahsite')
    @else
        @include('layouts.runyHead')
    @endif

    @livewireStyles
</head>
<body class="index-page">
@yield('content')
@if(setting_site()->front_theme == 'tarahsite')
    @include('layouts.tarahsite.runyFooterTarahsite')
@else
    @include('layouts.runyFooter')
@endif
@livewireScripts
</body>
</html>
