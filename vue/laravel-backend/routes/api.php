<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\FactController;
Route::post('/facts', [FactController::class, 'store']);

use App\Http\Controllers\AuthController;
Route::post('/register', [AuthController::class, 'register']);

use App\Http\Controllers\Auth\LoginController;
Route::post('/login', [LoginController::class, 'login']);

use App\Http\Controllers\ForgotPasswordController;
Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLink']);




