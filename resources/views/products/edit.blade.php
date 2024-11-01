<!-- resources/views/products/edit.blade.php -->
{{--@extends('layouts.layout')--}}

{{--@section('content')--}}
@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2 class="mt-4">Редактировать товар</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Название</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $product->name) }}" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ old('price', $product->price) }}" required>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea name="description" class="form-control" id="description" required>{{ old('description', $product->description) }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection

{{--@endsection--}}
