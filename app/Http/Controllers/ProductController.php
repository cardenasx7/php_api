<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function create(Request $request)
    {
        $product = new Product($request->all());
        $product->save();
        return response()->json($product, 200);
    }

    public function store()
    {
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json($product, 200);
    }
}