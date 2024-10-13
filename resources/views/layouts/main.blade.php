<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources\css\app.css", "resources\js\app.js"])
    <title>Document</title>
</head>

<body>
    <heder>
        <nav>
            <a href="/">
                Главная
            </a>
            <a href="/array">
                Список
            </a>
            <a href="/reports">
                Репорты
            </a>
        </nav>

    </heder>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; Жёсктий Михил Михайлович 2005
    </footer>
</body>

</html>