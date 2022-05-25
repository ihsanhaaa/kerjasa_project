<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatController extends Controller
{
    public function index()
    {
        return view('categories', [
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        // return $product;

        return view('category', [
            'categories' => Category::all(),
        ]);
    }
}
