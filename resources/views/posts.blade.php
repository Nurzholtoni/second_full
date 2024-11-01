<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <!-- Добавляем Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Светло-серый фон */
            color: #333; /* Темный цвет текста */
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.9); /* Полупрозрачный фон */
        }
        .navbar .nav-link {
            color: #333; /* Цвет текста для навигации */
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Полупрозрачный белый фон для карточек */
            color: #333; /* Темный цвет текста в карточках */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Добро пожаловать на наш сайт!</h1>

    <nav class="navbar navbar-expand-lg navbar-light mt-4">
        <div class="container">
            <a class="navbar-brand" href="/">Магазин</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/support">Поддержка</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="text-center mt-5">
        <p class="lead">Здесь вы найдете все необходимое для вашего футбольного опыта.</p>
        <p>Не забудьте ознакомиться с нашими товарами и предложениями!</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Футбольные мячи</h5>
                    <p class="card-text">Высококачественные мячи для любого уровня игры.</p>
                    <a href="/products" class="btn btn-primary">Посмотреть товары</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Форма и одежда</h5>
                    <p class="card-text">Специальная одежда для комфортной игры.</p>
                    <a href="/products" class="btn btn-primary">Посмотреть товары</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Обувь</h5>
                    <p class="card-text">Лучшая обувь для футбольных матчей.</p>
                    <a href="/products" class="btn btn-primary">Посмотреть товары</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Добавляем jQuery и Bootstrap JS перед закрывающим тегом body -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
