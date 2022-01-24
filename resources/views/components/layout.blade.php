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
    <header class="d-flex justify-content-between align-items-center fixed-top px-5 pt-3 text-primary">
        <h1 class="m-0">ToCreate</h1>
        <ul class="nav d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link fs-5">ToCreateとは</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <button class="btn btn-outline-primary fs-5">アカウント登録</button>
                </a>
            </li>
        </ul>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="fixed-bottom">
        <p class="text-center">©ToCreate.com</p>
    </footer>
</body>
</html>
