{{--@extends('layouts.layout')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <h1>Список товаров</h1>--}}
{{--        <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить товар</a>--}}

{{--        <table class="table mt-4">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Название</th>--}}
{{--                <th>Цена</th>--}}
{{--                <th>Описание</th>--}}
{{--                <th>Действия</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($products as $product)--}}
{{--                <tr>--}}
{{--                    <td>{{ $product->name }}</td>--}}
{{--                    <td>{{ $product->price }} тг</td>--}}
{{--                    <td>{{ $product->description }}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редактировать</a>--}}
{{--                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button class="btn btn-danger" type="submit">Удалить</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Список товаров</h1>

        <!-- Проверка прав на добавление товара -->
        @can('add products')
            <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить товар</a>
        @endcan

        <table class="table mt-4">
            <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} тг</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <!-- Проверка прав на редактирование товара -->
                        @can('edit products')
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
                        @endcan

                        <!-- Проверка прав на удаление товара -->
                        @can('delete products')
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
