<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            transition: transform 0.2s;
            border: 1px solid #007bff;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #007bff;
        }
        .navbar a {
            color: white !important;
        }
        .footer {
            margin-top: 20px;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        .btn-primary {
            background-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Список товаров</h1>

    <nav class="navbar navbar-expand-lg navbar-light mt-4">
        <div class="container">
            <a class="navbar-brand" href="/">Магазин</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/support') }}">Поддержка</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-4">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Цена: <strong>{{ $product->price }} тг</strong></p>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="/" class="btn btn-secondary">Назад к меню</a>
    </div>
</div>

<footer class="footer text-center">
    <div class="container">
        <span class="text-muted">© {{ date('Y') }} Магазин. Все права защищены.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
