<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('brands.create');
    }


    public function store(NewBrandRequest $request)
    {
        Brand::query()->create([
            'title' => $request->get('title'),
            'persian-title' => $request->get('persian-title')
        ]);
        return redirect('/');
    }
}
