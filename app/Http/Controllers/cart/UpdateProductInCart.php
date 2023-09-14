<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UpdateProductInCart extends Controller
{
    public function __invoke(Request $request)
    {
        \Cart::session(Session::getId())->update($request->id, array(
            'quantity' => $request->updateNumber,
        ));
        return redirect()->back();
    }
}
