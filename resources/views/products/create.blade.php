@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2 class="text-center">Добавить товар</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Название товара:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="price">Цена:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Добавить товар</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection
