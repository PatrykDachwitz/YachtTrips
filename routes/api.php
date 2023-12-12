<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BannersController;
use App\Http\Controllers\api\categoryBannersController;
use App\Http\Controllers\api\FolderController;
use App\Http\Controllers\api\YachtsController;
use App\Http\Controllers\api\TripsController;
use App\Http\Controllers\api\TemplatesController;
use App\Http\Controllers\api\OceansController;
use App\Http\Controllers\api\OrdersController;
use App\Http\Controllers\api\BooksController;
use App\Http\Controllers\api\MethodPaymentsController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'prefix' => "banners/",
    "as" => "banners."
], function () {
    Route::apiResource('category', categoryBannersController::class);
});

Route::apiResource('banners', BannersController::class);

Route::apiResource('folders', FolderController::class);
Route::apiResource('yachts', YachtsController::class);
Route::apiResource('trips', TripsController::class);
Route::apiResource('templates', TemplatesController::class);
Route::apiResource('oceans', OceansController::class);
Route::apiResource('method_payments', MethodPaymentsController::class);
Route::get('orders/show/{sessionId}', [OrdersController::class, "showBySession"])
    ->name('orders.showBySession');
Route::apiResource('orders', OrdersController::class);
Route::apiResource('booking', BooksController::class);
