<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController as ApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 */
class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();


        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Product
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }


        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->user_id = Auth::user()->id;
        $product->save();

        if (!$product->save()) {
            return $this->sendError('Create Error.', $validator->errors());
        }


        return $this->sendResponse($product->toArray(), 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);


        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id);

        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }

        $updateProduct = Product::find($product->id);;
        $updateProduct->title = (!empty($request->title) ? $request->title : $product->title);
        $updateProduct->price = (!empty($request->price) ? $request->price : $product->price);
        $updateProduct->quantity = (!empty($request->quantity) ? $request->quantity : $product->quantity);
        $updateProduct->user_id = Auth::user()->id;
        $updateProduct->save();


        return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();


        return $this->sendResponse($product->toArray(), 'Product deleted successfully.');
    }
}
