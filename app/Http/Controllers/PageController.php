<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function posts()
    {
        return view('posts'); // Главная страница с меню
    }

    public function index()
    {
        // Получаем все продукты
        $products = Product::all();

        // Передаем переменную в представление
        return view('products.product', compact('products')); // Замените 'products.index' на имя вашего представления
    }


    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user')); // Страница профиля
    }

    public function support()
    {
        return view('support'); // Страница поддержки
    }

    public function about()
    {
        return view('about'); // Страница "О нас"
    }

    public function products()
    {
        $products = Product::all();
        return view('products', compact('products')); // Страница товаров
    }


}
