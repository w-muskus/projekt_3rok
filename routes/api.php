<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produkty_i_uslugi;
use App\Models\Kontrahent;
use App\Models\Rabat;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_produkty', function () {
    return (Produkty_i_uslugi::all()); 
});

Route::get('/get_kontrahent', function () {
    return (Kontrahent::all()); 
});

Route::get('/get_rabat', function () {
    return (Rabat::all()); 
});

