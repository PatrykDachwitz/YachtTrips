<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BannersController;
use App\Http\Controllers\api\categoryBannersController;
use App\Http\Controllers\api\FolderController;

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

Route::group([
    'prefix' => "banners/",
    "as" => "banners."
], function () {
    Route::resource('category', categoryBannersController::class);
});

Route::resource('banners', BannersController::class);

Route::resource('folders', FolderController::class);
