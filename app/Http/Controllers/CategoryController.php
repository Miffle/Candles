<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $result = Types::where("engName", $request->Category)->first();
        $id = ($result) ? $result->id : abort(404);
        $productsInThisCategory = Types::find($id)->FindingProductsInThisCategory;
        return view("category", compact("result","productsInThisCategory", "user"));

    }
}
