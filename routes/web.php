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

Route::get("/customer", [\App\Http\Controllers\CustomerController::class, "create"])->name("createCustomer");
Route::post("/customer", [\App\Http\Controllers\CustomerController::class, "store"])->name("storeCustomer");
