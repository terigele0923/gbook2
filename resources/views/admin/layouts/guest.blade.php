<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/static/css/app.css', 'resources/static/js/app.js'])
    <title>@yield('title',"トップページ")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

@yield('js')
</body>
</html>