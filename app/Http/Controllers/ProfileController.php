<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $user = $this->getUser();
        $this->cartInit();
        return ($user) ? view("profile", compact("user")) : abort(404);
    }
}
