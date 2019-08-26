<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();

        var_dump($products);
        return $products->toArray() ?? [];
    }

    public function show(Product $product)
    {
        return view('the_product');
    }

    public function store()
    {
//
    }

    public function edit(Product $product)
    {
        return view('product_edit');
    }

    public function update(Product $product, Request $request)
    {
//
    }

    public function destroy(Product $product)
    {
//
    }
}
