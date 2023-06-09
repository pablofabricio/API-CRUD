<?php

use App\Http\Controllers\BookController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/book', [BookController::class, 'getAll'])->middleware('auth.basic');
Route::get('/book/{id}', [BookController::class, 'show'])->middleware('auth.basic');
Route::post('/book', [BookController::class, 'store'])->middleware('auth.basic');
Route::put('/book/{id}', [BookController::class, 'update'])->middleware('auth.basic');
Route::delete('/book/{id}', [BookController::class, 'delete'])->middleware('auth.basic');
