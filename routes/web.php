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

Route::get("/", function (){
    return view("home");
})->name("home");

Route::get("/login", [\App\Http\Controllers\AuthController::class, "loginView"])->name("loginView");
Route::post("/login", [\App\Http\Controllers\AuthController::class, "login"])->name("login");
Route::get("logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("logout");

Route::middleware("root")->group(function (){
    Route::get("/customers", [\App\Http\Controllers\CustomerController::class, "index"])->name("customers");
    Route::get("/customer", [\App\Http\Controllers\CustomerController::class, "create"])->name("createCustomer");
    Route::post("/customer", [\App\Http\Controllers\CustomerController::class, "store"])->name("storeCustomer");
    Route::get("/customer/{customer}", [\App\Http\Controllers\CustomerController::class, "edit"])->name("editCustomer");
    Route::put("/customer/{customer}", [\App\Http\Controllers\CustomerController::class, "update"])->name("updateCustomer");
    Route::delete("/customer", [\App\Http\Controllers\CustomerController::class, "destroy"])->name("deleteCustomer");
});

Route::middleware("customerAdmin")->group(function() {
    Route::get("/companies", [\App\Http\Controllers\CompanyController::class, "index"])->name("companies");
    Route::get("/company", [\App\Http\Controllers\CompanyController::class, "create"])->name("createCompany");
    Route::post("/company", [\App\Http\Controllers\CompanyController::class, "store"])->name("storeCompany");
    Route::get("/company/{company}", [\App\Http\Controllers\CompanyController::class, "edit"])->name("editCompany");
    Route::put("/company/{company}", [\App\Http\Controllers\CompanyController::class, "update"])->name("updateCompany");
    Route::delete("/company", [\App\Http\Controllers\CompanyController::class, "destroy"])->name("deleteCompany");
});
