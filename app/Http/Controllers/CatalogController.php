<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function __invoke()
    {
        $categories = Types::all();
        $user = $this->getUser();
        $this->cartInit();
//        Types::factory()->count(5000)->create();
        return view("catalog", compact("categories", "user"));
    }
}
