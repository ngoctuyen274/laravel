<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Trainer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TrainersController extends Controller
{
    public function trainers()
    {
        $obj = new Trainer();
        $trainers = $obj->paginate(15);
        return view('trainers', ['trainers' => $trainers]);
    }
}