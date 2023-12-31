<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StartController extends Controller
{
    public function __invoke()
    {
        $user = $this->getUser();
        $this->cartInit();

        return view("start", compact("user"));
    }
}
