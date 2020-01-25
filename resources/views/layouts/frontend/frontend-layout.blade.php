<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }} - {{ config('app.subtitle') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom') }}/main.css" id="theme" rel="stylesheet">
  <link href="{{ asset('css/custom') }}/hover.css" id="theme" rel="stylesheet">
  <link href="{{ asset('css/custom') }}/onscroll.css" id="theme" rel="stylesheet">
  <link href="{{ asset('css/custom') }}/util.css" id="theme" rel="stylesheet">
  <link href="{{ asset('css/custom') }}/styles.css" id="theme" rel="stylesheet">

  <link href="{{ asset('css/custom') }}/hamburgers.min.css" id="theme" rel="stylesheet">
  <link href="{{ asset('css/custom/admin') }}/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/0371f381a6.js" crossorigin="anonymous"></script>
</head>

<body>
  <div id="app" data-spy="scroll" data-target="#main-navbar">
    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('js/custom') }}/script.js"></script>
  <!--===============================================================================================-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfH9_Q4QbqpfDeBdyGY-d-VSOY8CQ0wD4"></script>
  <script src="{{ asset('js/custom') }}/map-custom.js"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('js/custom') }}/main.js"></script>
  <script src="{{ asset('js/custom') }}/onscroll.js"></script>
</body>

</html>