<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('home',$data);
    }
    public function getUser()
    {
        $products = Product::all();
        return response()->json(json_encode($products));
    }
}
