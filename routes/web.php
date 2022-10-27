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

Route::get("/customers", [\App\Http\Controllers\CustomerController::class, "index"])->name("customers");
Route::get("/customer", [\App\Http\Controllers\CustomerController::class, "create"])->name("createCustomer");
Route::post("/customer", [\App\Http\Controllers\CustomerController::class, "store"])->name("storeCustomer");
Route::get("/customer/{customer}", [\App\Http\Controllers\CustomerController::class, "edit"])->name("editCustomer");
Route::put("/customer/{customer}", [\App\Http\Controllers\CustomerController::class, "update"])->name("updateCustomer");
Route::delete("/customer", [\App\Http\Controllers\CustomerController::class, "destroy"])->name("deleteCustomer");
