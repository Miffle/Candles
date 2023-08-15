<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {
        $user = $this->getUser();
        $cart = $this->getCartContent();
        return view("cart", compact("user", "cart"));
    }
}
