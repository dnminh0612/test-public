<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        foreach ($products as $key => $product){
            $products[$key]['image'] =  Storage::url($product->image);
        }
        return response()->json($products);
    }
}
