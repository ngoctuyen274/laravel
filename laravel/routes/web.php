<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrainersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', [CompaniesController::class, 'companies']);

Route::get('/trainers', [TrainersController::class, 'trainers']);

Route::get('/search', [SearchController::class, 'search']);