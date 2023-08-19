<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin;
use App\Http\Requests\Type;
use App\Models\Products;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = $this->getUser();
        $types = Types::all();
        return view("admin", compact("user", "types"));
    }

//    public function addProduct(Request $request)
//    {
//
//    }
    public function AddProduct(Admin $request)
    {
        $data = $request->validated();
        $data["image"] = Storage::put("public/images", $data["image"]);
        Products::firstOrCreate($data);
        return redirect()->back();
    }
    public function AddProductType(Type $request){
//        dump($request);
        $data = $request->validated();
        $data["image"] = Storage::put("public/images", $data["image"]);
        Types::firstOrCreate($data);
        return redirect()->back();
    }
}
