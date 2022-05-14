<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::latest()->get();
        return view('admin.checkout', [
            'checkouts' => $checkouts,
        ]);
    }
}
