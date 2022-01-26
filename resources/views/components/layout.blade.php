<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/layout.css') }}">
    <link rel="stylesheet" href="{{ $style }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="d-flex flex-column">
    {{-- ヘッダー --}}
    <header class="d-flex justify-content-between align-items-center vw-100 mb-auto px-5 pt-3 text-primary">
        <h1 class="m-0">ToCreate</h1>
        <ul class="nav d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link fs-5">ToCreateとは</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('auth.signup') }}" class="nav-link">
                    <button class="btn btn-outline-primary fs-5">アカウント登録</button>
                </a>
            </li>
        </ul>
    </header>

    {{-- メイン --}}
    <main>
        {{ $slot }}
    </main>

    {{-- フッター --}}
    <footer class="mt-auto">
        <p class="text-center">&copy;ToCreate.com</p>
    </footer>
</body>
</html>
