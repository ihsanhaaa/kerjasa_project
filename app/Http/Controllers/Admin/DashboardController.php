<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $users = User::all();
        $checkouts = Checkout::all();
        $products = Product::all();

        return view('admin.dashboard', [
            'posts' => $posts,
            'categories' => $categories,
            'users' => $users,
            'checkouts' => $checkouts,
            'products' => $products,
        ]);
    }
}
