<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
//            'promotions' => Promotion::active()->get(),
//            'categories' => Category::limit(6)->get(),
//            'popularProducts' => Product::popular()->limit(8)->get()
        ]);
    }
}
