<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome',[

            'brands' => Brand::all(),
            'categories' => Category::all()
        ]);
    }
}
