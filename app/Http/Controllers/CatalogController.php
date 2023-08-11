<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Types::all();
        return view("catalog", compact("categories"));
    }
}
