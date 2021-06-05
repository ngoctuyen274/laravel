<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Search;
use App\Models\Trainer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name = $request->get('search');
        $obj = new Trainer();
        $search = $obj->search($name)->paginate(10);
        return view('search',['trainers' => $search, 'name'=>$name]);
    }
}