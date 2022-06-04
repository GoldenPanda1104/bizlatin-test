<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\VentaController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('vendedores', VendedorController::class); // Creacion de rutas de vendedores
Route::apiResource('clientes', ClienteController::class); // Creacion de rutas de clientes
Route::apiResource('vehiculos', VehiculoController::class); // Creacion de rutas de vehiculos
Route::apiResource('ventas', VentaController::class); // Creacion de rutas de ventas
