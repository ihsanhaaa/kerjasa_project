<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.services.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required|string',
            'slug' => 'required|string',
            'image' => 'image|file|max:3024',
            'package' => 'required|string',
            'benefit' => 'required|string',
            'price' => 'required|integer',
            'description' => 'required|string',
            'name_profil' => 'required|string',
            'bio_profil' => 'required|string',
            'fb_profil' => 'required|string',
            'ig_profil' => 'required|string',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request
                ->file('image')
                ->store('product-images');
        }

        $validatedData['user_id'] = Auth::check() && Auth::user()->is_admin;

        Product::create($validatedData);
        $request->session()->flash('success', 'Data berhasil ditambahkan');

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.services.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.services.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        $request->session()->flash('success', 'Data berhasil diedit');

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        $request->session()->flash('success', 'Data dihapus');

        return redirect(route('admin.services.index'));
    }
}
