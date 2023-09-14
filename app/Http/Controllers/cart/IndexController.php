<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        $user = $this->getUser();
        $cart = $this->getCartContent()->sortKeys();
        return view("cart", compact("user", "cart"));

    }
}
