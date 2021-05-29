<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Company;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoriesController extends Controller
{
    public function categories()
    {
        $obj = new Categories();
        $categories = $obj->paginate(15);
        return view('categories', ['categories' => $categories]);
    }
}