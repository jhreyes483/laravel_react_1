<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products =  Product::all();
        return $products;
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->description = $request->description;
        $product->description = $request->price;
        $product->description = $request->stock;
        $product->save();
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($request->id);
        $product->description = $request->description;
        $product->description = $request->price;
        $product->description = $request->stock;
        $product->save();
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
