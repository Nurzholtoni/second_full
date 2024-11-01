<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Товар успешно добавлен.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Проверка прав на редактирование
        if (!auth()->user()->can('edit products')) {
            abort(403, 'Access denied');
        }

        // Найди продукт по ID
        $product = Product::findOrFail($id);

        // Верни представление для редактирования товара, передав информацию о товаре
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $product->update($request->all());


        return redirect()->route('products.index')->with('success', 'Товар успешно обновлен.');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Товар успешно удален.');
    }
}
