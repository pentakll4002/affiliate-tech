<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

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
Route::post('/facts', [FactController::class, 'store'])->middleware('auth:sanctum');
Route::get('/facts', [FactController::class, 'index'])->middleware('auth:sanctum');

// New route for image uploads
use App\Http\Controllers\ImageUploadController;
Route::post('/image-upload', [ImageUploadController::class, 'upload']);

use App\Http\Controllers\AuthController;
Route::post('/register', [AuthController::class, 'register']);

use App\Http\Controllers\Auth\LoginController;
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

use App\Http\Controllers\ForgotPasswordController;
Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLink']);

use App\Http\Controllers\PostController;
Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');

use App\Http\Controllers\ArticleController;
Route::apiResource('articles', ArticleController::class)->middleware('auth:sanctum');

Route::get('/test-image-url', function () {
    $testImagePath = 'images/facts/test.jpg';
    if (!Storage::disk('public')->exists($testImagePath)) {
        return "Test image does not exist at: storage/app/public/{$testImagePath}";
    }

    $urlFromStorage = Storage::url($testImagePath);
    $absoluteUrl = asset($urlFromStorage);

    return response()->json([
        'storage_url' => $urlFromStorage,
        'absolute_url_with_asset' => $absoluteUrl,
        'app_url_env' => env('APP_URL'),
    ]);
});




