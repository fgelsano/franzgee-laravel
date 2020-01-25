<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Francis Gelsano') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom/admin') }}/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0371f381a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
    <div id="app">
        <main class="" id="page-top">
            <!-- Page Wrapper -->
            <div id="wrapper">
                @include('layouts.admin-partials._sidebar')
                @yield('content')
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/custom/admin') }}/sb-admin-2.min.js"></script>
    <script src="{{ asset('js/custom/admin/jquery-easing') }}/jquery.easing.min.js"></script>
    <script src="{{ asset('js/custom/admin/chart.js') }}/chart.min.js"></script>
</body>

</html>