<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{
 public function product()
    {
        $products = Product:: paginate(6);
        return view('products', compact('products'));
    }

 public function add()
    {
        return view('register');
    }




  public function register(ProductRequest $request)
    {
         if ($request->has('back')) {
            return redirect('/products');
        }

        $product = [
        'name' => $request->name,
        'price' => $request->price,
        'image' => $request->image,
        'description' => $request->description,
        ];

      Product::create($product);

      return view('products');


    }

}
