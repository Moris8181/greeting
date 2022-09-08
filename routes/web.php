<?php

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

Route::get("/morris/greeting/{time}",[App\Http\Controllers\GreetingController::class, "greeting"]);
Route::get("/morris/freedom/{msg}",[App\Http\Controllers\GreetingController::class, "freedom"]);
Route::get("/morris/random",[App\Http\Controllers\GreetingController::class, "random"]);


