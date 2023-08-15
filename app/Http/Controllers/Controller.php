<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUser()
    {
        return Auth::user();
    }

    public function cartInit()
    {
        \Cart::session(Session::getId());
    }
    public function getCartContent(){
        $this->cartInit();
        return \Cart::getContent();
    }
}
