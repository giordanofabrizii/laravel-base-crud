<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ Vite::asset('resources/scss/app.scss') }}">
    <title>
        @yield('page-name')
    </title>
    @vite('resource/js/app.js')
</head>
<body>
    <main>
        @yield('main-content')
    </main>
</body>
</html>
