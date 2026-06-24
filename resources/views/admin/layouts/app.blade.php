<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simditor@2.3.28/styles/simditor.css">

    <title>@yield('title', 'GBook2')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/simple-module@1.3.0/lib/module.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-hotkeys@0.1.0/lib/hotkeys.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-uploader@0.1.0/lib/uploader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simditor@2.3.28/lib/simditor.js"></script>
</body>

</html>