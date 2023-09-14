<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use App\Models\Products;

use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreateProductInCartController extends Controller
{
    public function __invoke(Request $request)
    {
        $Product = Products::query()->where(['id' => $request->id])->first();
        $category = Types::query()->where(["id"=>$Product->type])->first();
        \Cart::session(Session::getId())->add(
            array(
                'id' => $Product->id,
                'name' => $Product->name,
                'price' => $Product->price,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $Product->image,
                    'description' => $Product->description,
                    "EngName" => $Product->engName,
                    "category" => $category->engName,
                ),
                'associatedModel' => $Product
            ));
        return redirect()->back();
    }
}

