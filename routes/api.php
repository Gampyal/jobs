<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('index', [JobController::class, 'index']);
Route::post('store', [JobController::class, 'store']);
Route::get('show/{job}', [JobController::class, 'show']);
Route::post('update/{job}', [JobController::class, 'update']);
Route::post('delete/{job}', [JobController::class, 'delete']);
Route::post('login', [JobController::class, 'login']);
