<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    //
    public function index()
    {
         // return Category::all(); this will return everything 

       $products = Product::with('category')->paginate(9);

    //    return $products;

        return ProductResource::collection($products);
    }
}
