<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $Products = Product::all();
        return view('Home.index', ['Products' => $Products]);
    }
}
