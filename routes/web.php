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
    Route::get("/softwareHouses", [\App\Http\Controllers\SoftwareHouseController::class, "index"])->name("softwareHouses");
    Route::get("/softwareHouse", [\App\Http\Controllers\SoftwareHouseController::class, "create"])->name("createSoftwareHouse");
    Route::post("/softwareHouse", [\App\Http\Controllers\SoftwareHouseController::class, "store"])->name("storeSoftwareHouse");
    Route::get("/softwareHouse/{softwareHouse}", [\App\Http\Controllers\SoftwareHouseController::class, "edit"])->name("editSoftwareHouse");
    Route::put("/softwareHouse/{softwareHouse}", [\App\Http\Controllers\SoftwareHouseController::class, "update"])->name("updateSoftwareHouse");
    Route::delete("/softwareHouse", [\App\Http\Controllers\SoftwareHouseController::class, "destroy"])->name("deleteSoftwareHouse");
});

Route::middleware("softwareHouseAdmin")->group(function() {
    Route::get("/clientes", [\App\Http\Controllers\ClienteController::class, "index"])->name("clientes");
    Route::get("/cliente", [\App\Http\Controllers\ClienteController::class, "create"])->name("createCliente");
    Route::post("/cliente", [\App\Http\Controllers\ClienteController::class, "store"])->name("storeCliente");
    Route::get("/cliente/{cliente}", [\App\Http\Controllers\ClienteController::class, "edit"])->name("editCliente");
    Route::put("/cliente/{cliente}", [\App\Http\Controllers\ClienteController::class, "update"])->name("updateCliente");
    Route::delete("/cliente", [\App\Http\Controllers\ClienteController::class, "destroy"])->name("deleteCliente");
});
