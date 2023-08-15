<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Types::all();
        $user = $this->getUser();
        $this->cartInit();
        return view("catalog", compact("categories", "user"));
    }
}
