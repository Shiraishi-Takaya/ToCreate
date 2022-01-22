<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ $style }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="fixed-top">
        <h1 class="ps-5 py-4">ToCreate</h1>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="fixed-bottom">
        <p class="text-center">©ToCreate.com</p>
    </footer>
</body>
</html>
