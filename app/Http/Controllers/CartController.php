<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $user = $this->getUser();
        $cart = $this->getCartContent()->sortKeys();
        return view("cart", compact("user", "cart"));
    }

    public function createProductInCart(Request $request)
    {
        $Product = Products::query()->where(['id' => $request->id])->first();

        \Cart::session(Session::getId())->add(
            array(
                'id' => $Product->id,
                'name' => $Product->name,
                'price' => $Product->price,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $Product->image,
                    'description' => $Product->description,
                ),
                'associatedModel' => $Product
            ));
        return redirect()->back();
    }

    public function updateProductInCart(Request $request)
    {

        \Cart::session(Session::getId())->update($request->id, array(
            'quantity' => $request->updateNumber,
        ));
        return redirect()->back();
    }

    public function removeProductFromCart(Request $request)
    {
        \Cart::session(Session::getId())->remove($request->id);
        return redirect()->back();
    }
}
