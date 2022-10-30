<?php

use App\Http\Controllers\API\CekKotaController;
use App\Http\Controllers\API\CekProvinsiController;
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

// cek Kota berdasarkan ID : cth endpoint, http://localhost:8000/api/search/city/4
Route::get('/search/city/{id}', [CekKotaController::class, 'show']);
// cek Provinsi berdasarkan ID : cth endpoint, http://localhost:8000/api/search/provinces/4
Route::get('search/provinces/{id}', [CekProvinsiController::class, 'show']);
