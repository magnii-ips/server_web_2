<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f5f5f5;
            color: #222;
        }
        header {
            background: #2d3748;
            padding: 15px 30px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            flex: 1;
            padding: 30px;
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
            box-sizing: border-box;
        }
        footer {
            background: #2d3748;
            color: #fff;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a>
            <a href="/about">О нас</a>
            <a href="/contacts">Контакты</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Щербинин Тихон, группа 251-321
    </footer>
</body>
</html>