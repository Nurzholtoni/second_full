{{--@extends('layouts.layout')--}}

{{--@section('content')--}}
{{--    <h1>Ваш Профиль</h1>--}}
{{--    <p>Добро пожаловать, {{ $user->name }}!</p>--}}
{{--    <h2>Личная информация</h2>--}}
{{--    <p>Имя: {{ $user->name }}</p>--}}
{{--    <p>Email: {{ $user->email }}</p>--}}
{{--    <p>Телефон: {{ $user->phone ?? 'Не указан' }}</p> <!-- Предполагая, что у вас есть поле phone в модели User -->--}}

{{--    <h2>Управление учетной записью</h2>--}}
{{--    <ul>--}}
{{--        <li><a href="{{ route('profile.edit') }}">Редактировать профиль</a></li>--}}
{{--    </ul>--}}
{{--    <h2>Безопасность</h2>--}}
{{--    <div>--}}
{{--        <a href="/">Назад к меню</a>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Ваш Профиль</h1>
        <p class="text-center">Добро пожаловать, {{ $user->name }}!</p>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Личная информация</h2>
            </div>
            <div class="card-body">
                <p><strong>Имя:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Телефон:</strong> {{ $user->phone ?? 'Не указан' }}</p> <!-- Предполагая, что у вас есть поле phone в модели User -->
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Управление учетной записью</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Редактировать профиль</a>
                    </li>
                </ul>
            </div>
        </div>



        </div>

        <div class="text-center">
            <a href="/" class="btn btn-secondary">Назад к меню</a>
        </div>
    </div>
@endsection

