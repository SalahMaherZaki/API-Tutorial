<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\UserController;

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

Route::get('data', [dummyAPI::class, 'getData']);
Route::get('list/{id?}', [UserController::class, 'list']);
Route::post('add', [UserController::class, 'add']);
Route::put('update/{id}', [UserController::class, 'update']);
Route::get('search/{string}', [UserController::class, 'search']);
Route::delete('delete/{id}', [UserController::class, 'delete']);
