<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use App\Http\Requests\Admin\CategoryManage\Store;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', [
            'category' => $category,
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('product-images');
        $validatedData = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'image' => 'image|file|max:3024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request
                ->file('image')
                ->store('product-images');
        }

        $validatedData['user_id'] = Auth::check() && Auth::user()->is_admin;

        Category::create($validatedData);
        $request->session()->flash('success', 'Data berhasil ditambahkan');

        return redirect(route('admin.categories.index'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'image' => 'image|file|max:3024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request
                ->file('image')
                ->store('product-images');
        }

        $category->update($validatedData);

        return redirect(route('admin.categories.index'));
    }

    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        $request->session()->flash('success', 'Data dihapus');

        return redirect(route('admin.categories.index'));
    }
}
