<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118483377-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-118483377-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
            name='description'
            content='Ihr Meisterbetrieb aus Barkelsby für sämtliche Arbeiten rund um Heizung, Sanitär, Solar und Elektro.'
    />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    @yield('head')
</head>
<body>
@include('layout.header')
<main role='main' class="mb-3">
    @yield('content')
</main>
@include('layout.footer')
<script src="{{ mix('js/vendor.js') }}"></script>
@yield('js')
</body>
</html>