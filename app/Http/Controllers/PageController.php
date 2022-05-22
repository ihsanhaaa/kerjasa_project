<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::take(8)->get();
        $posts = Post::take(3)->get();

        return view('welcome', [
            'products' => $products,
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }
}
