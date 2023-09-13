<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    {!! SEO::generate() !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.runyHead')

    @livewireStyles
</head>
<body class="index-page">

@yield('content')

@include('layouts.runyFooter')

@livewireScripts

</body>
</html>
