<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use App\Models\Product;
use Auth;
use App\Http\Requests\Admin\CheckoutManage\Store;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::all();
        return view('admin.checkouts.index', [
            'checkouts' => $checkouts,
        ]);
    }

    public function destroy(Request $request, Checkout $checkout)
    {
        $checkout->delete();
        $request->session()->flash('success', 'Data dihapus');

        return redirect(route('admin.checkouts.index'));
    }
}
