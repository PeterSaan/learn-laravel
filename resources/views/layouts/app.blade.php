<!DOCTYPE html>
<html lang="en" data-theme="sunset">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @vite('resources/css/app.css')
</head>

<body>
        @include('partials.nav')

        @isset($header)
                    {{ $header }}
        @endisset

        <main>
            {{ $slot }}
        </main>
</body>

</html>
