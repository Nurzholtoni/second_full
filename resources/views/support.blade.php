@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mt-4">Поддержка клиентов</h1>
        <p>Мы всегда готовы помочь вам с любыми вопросами и проблемами, связанными с нашей продукцией.</p>

        <h2>Часто задаваемые вопросы</h2>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Как сделать заказ?</strong> - Вы можете сделать заказ, добавив товары в корзину и следуя инструкциям на сайте.</li>
            <li class="list-group-item"><strong>Как вернуть товар?</strong> - Если вы хотите вернуть товар, свяжитесь с нашей службой поддержки через Telegram или по электронной почте.</li>
            <li class="list-group-item"><strong>Как оплатить заказ?</strong> - Мы принимаем различные методы оплаты, включая банковские карты и электронные кошельки.</li>
        </ul>

        <h2>Связаться с нами</h2>
        <p>Если у вас есть другие вопросы, вы можете связаться с нашей службой поддержки:</p>
        <p>
            <a href="https://t.me/nurzholtoni" class="btn btn-primary" target="_blank">Telegram</a>
        </p>
        <p>Электронная почта:
            Nurzhole@gmail.com
        </p>
    </div>
    <nav>

        <div class="text-center">
            <a href="/" class="btn btn-secondary">Назад к меню</a>
        </div>
    </nav>
@endsection
