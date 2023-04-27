<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    {!! SEO::generate() !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.runyHead')
    @livewireStyles
</head>
<body class="index-page sidebar-collapse">

<!-- responsive-header -->
@if(\Illuminate\Support\Facades\Auth::user()->levelPermission > 2)
@livewire('admin.theme.navbar-responsive')
@else

@endif

<!-- responsive-header -->

<div class="wrapper default">
    @yield('content')
</div>

@include('layouts.runyFooter')
@livewireScripts
</body>
</html>
