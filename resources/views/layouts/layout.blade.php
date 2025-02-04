<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>NurShop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">NurShop</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">О нас</a></li>
            <li class="nav-item"><a class="nav-link" href="/products">Товары</a></li>
            <li class="nav-item"><a class="nav-link" href="/profile">Профиль</a></li>
            <li class="nav-item"><a class="nav-link" href="/support">Поддержка</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content') <!-- Это место, где будет содержимое из других представлений -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
