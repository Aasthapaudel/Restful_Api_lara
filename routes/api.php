<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DummpyApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Models\User;
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

Route::resource('api',ApiController::class);
Route::get('data',[DummpyApi::class,'getData']);
Route::get('device',[DeviceController::class,'devicedata']);
