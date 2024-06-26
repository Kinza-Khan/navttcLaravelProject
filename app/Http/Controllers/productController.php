<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class productController extends Controller
{
    public function index()
    {
        $allData = category::with('product')->get();
        //dd($products);
        return view('index', compact('allData'));
    }
}
