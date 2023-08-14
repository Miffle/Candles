<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Types::all();
        $user = Auth::user();
        return view("catalog", compact("categories", "user"));
    }
}
