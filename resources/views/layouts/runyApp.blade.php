<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    {!! SEO::generate() !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.runyHead')
    <style>
        .modal_runy {

            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            transition: background-color 0.3s ease, opacity 0.3s ease; /* Add transitions */


        }
        .modal_runy-content {
            background-color: #fefefe;
            padding: 20px;
            border-radius: 4px;
            width: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            height: 800px;
            overflow: auto;
        }
        .modal_runy.active {
            opacity: 1;
            pointer-events: auto; /* Allow interaction */
        }

        .modal_runy-content.active {
            transform: translateY(0);
        }

        .runy_close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .runy_close:hover,
        .runy_close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    @livewireStyles
</head>
<body class="index-page">

@yield('content')

@include('layouts.runyFooter')
@livewireScripts

</body>
</html>
