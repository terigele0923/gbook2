<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'GBook2')</title>

    @vite(['resources/static/css/app.css', 'resources/static/js/app.js'])
</head>

<body>
    @include('admin.layouts.nav')

    @yield('content')
</body>

</html>