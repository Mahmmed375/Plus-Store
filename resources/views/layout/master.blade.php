<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lib/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/lib/bootstrap-icons/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="/lib/bootstrap-icons/fonts/bootstrap-icons.woff2">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('titl')</title>
</head>

<body>
    @include('layout.nav')
    @yield('body')
    @include('layout.footer')
    <script src="/js/main.js"></script>
    <script src="/lib/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/' . $js . '.js') }}"></script>
</body>

</html>
