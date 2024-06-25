<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index()
    {
        //$products = product::with('category')->get();
        //dd($products);//, compact('products')
        return view('index');
    }
}
