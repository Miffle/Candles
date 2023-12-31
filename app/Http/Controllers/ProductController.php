<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Types;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Request $request)
    {
        $id = $request->id;
        $typeId = Types::where("engName", "=", $request->Category)->first()->id;
        $Product = Products::where("id", "=", $id)
            ->where("engName", "=", $request->EngName)
            ->where("type", "=", $typeId)
            ->first();
        $user = $this->getUser();
        $this->cartInit();
        return ($Product) ? view("product", compact("Product", "user")) : abort(404);
    }
}
