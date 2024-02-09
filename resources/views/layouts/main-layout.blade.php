<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('/public/favicon.ico') }}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    @vite("resources/js/app.js")

    @yield('head')
</head>

<body>
    <div>
        @include('components.header')
        @include('components.content')
        @include('components.merch')
        @include('components.info')
        @yield('content')
        @include('components.footer')
    </div>
</body>

</html>