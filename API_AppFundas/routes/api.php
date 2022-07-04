<?php

use App\Http\Controllers\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Rutas Dev2
Route::get('usuarios', [Usuario::class, 'list']);
Route::post('usuarios', [Usuario::class, 'store']);
Route::get('usuarios/{usuario}', [Usuario::class, 'show']);
Route::put('usuarios/{usuario}', [Usuario::class, 'update']);
Route::delete('usuarios/{usuario}', [Usuario::class, 'destroy']);
