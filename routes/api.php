<?php

use App\Http\Controllers\api\BannersController;
use App\Http\Controllers\api\BooksController;
use App\Http\Controllers\api\categoryBannersController;
use App\Http\Controllers\api\CombinationsController;
use App\Http\Controllers\api\FolderController;
use App\Http\Controllers\api\MethodPaymentsController;
use App\Http\Controllers\api\OceansController;
use App\Http\Controllers\api\OrdersController;
use App\Http\Controllers\api\TemplatesController;
use App\Http\Controllers\api\TripsController;
use App\Http\Controllers\api\VacationersController;
use App\Http\Controllers\api\YachtsController;
use App\Http\Controllers\api\FilesController;
use App\Http\Controllers\Auth\LogOutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PagesController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\RoomsController;

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


Route::group([
    'middleware' => "auth:sanctum"
], function () {
    Route::post('/logOut', LogOutController::class);


    Route::apiResource('categoriesBanner', categoryBannersController::class);
    Route::apiResource('combinations', CombinationsController::class)
    ->except('update', 'show', 'edit', 'destroy');
    Route::apiResource('banners', BannersController::class);
    Route::apiResource('yachts', YachtsController::class);
    Route::apiResource('trips', TripsController::class);
    Route::apiResource('templates', TemplatesController::class);
    Route::apiResource('oceans', OceansController::class);
    Route::apiResource('method_payments', MethodPaymentsController::class);
    Route::apiResource('orders', OrdersController::class);
    Route::apiResource('booking', BooksController::class);
    Route::apiResource('vacationers', VacationersController::class);
    Route::apiResource('folders', FolderController::class);
    Route::apiResource('files', FilesController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('pages', PagesController::class);
    Route::apiResource('rooms', RoomsController::class);


});
