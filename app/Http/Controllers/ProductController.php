<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
       $product = new Product();
       $product->Productname = $request->Productname;
       $product->save();   
    }
}
