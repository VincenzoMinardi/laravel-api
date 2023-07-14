<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="https://cdn-icons-png.flaticon.com/512/1087/1087815.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolFolio</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('admin.includes.header')
    <main>
        @yield('contents')
    </main>
    @include('admin.includes.footer')
</body>
</html>