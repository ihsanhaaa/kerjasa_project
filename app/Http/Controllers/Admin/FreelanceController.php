<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Freelance;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class FreelanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers = Freelance::latest()->get();
        return view('admin.freelancers.index', [
            'freelancers' => $freelancers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.freelancers.create');
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
            'image' => 'image|file|max:2024',
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

        Freelance::create($validatedData);
        $request->session()->flash('success', 'Data berhasil ditambahkan');

        return redirect(route('admin.freelancers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Freelance  $freelance
     * @return \Illuminate\Http\Response
     */
    public function show(Freelance $freelance)
    {
        return view('admin.freelancers.show', [
            'freelance' => $freelance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freelance  $freelance
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelance $freelance)
    {
        return view('admin.freelancers.edit', [
            'freelance' => $freelance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freelance  $freelance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelance $freelance)
    {
        $freelance->update($request->all());
        $request->session()->flash('success', 'Data berhasil diedit');

        return redirect(route('admin.freelancers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freelance  $freelance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Freelance $freelance)
    {
        $freelance->delete();
        $request->session()->flash('success', 'Data dihapus');

        return redirect(route('admin.freelancers.index'));
    }
}
