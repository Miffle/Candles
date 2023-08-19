<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RemoveProductFromCart extends Controller
{
    public function __invoke(Request $request)
    {
        \Cart::session(Session::getId())->remove($request->id);
        return redirect()->back();
    }
}
