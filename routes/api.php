<?php

use App\Http\Controllers\api\BannersController;
use App\Http\Controllers\api\BooksController;
use App\Http\Controllers\api\categoryBannersController;
use App\Http\Controllers\api\FolderController;
use App\Http\Controllers\api\MethodPaymentsController;
use App\Http\Controllers\api\OceansController;
use App\Http\Controllers\api\OrdersController;
use App\Http\Controllers\api\TemplatesController;
use App\Http\Controllers\api\TripsController;
use App\Http\Controllers\api\VacationersController;
use App\Http\Controllers\api\YachtsController;
use App\Http\Controllers\api\FilesController;
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
   // 'middleware' => "auth:sanctum"
], function () {
    Route::apiResource('categoriesBanner', categoryBannersController::class);
    Route::apiResource('banners', BannersController::class);
    Route::apiResource('yachts', YachtsController::class)
    ->except('index');
    Route::apiResource('trips', TripsController::class)
    ->except('index', 'show');
    Route::apiResource('templates', TemplatesController::class);
    Route::apiResource('oceans', OceansController::class)
    ->except('index');
    Route::apiResource('method_payments', MethodPaymentsController::class);
    Route::apiResource('orders', OrdersController::class);
    Route::apiResource('booking', BooksController::class)
    ->except('store');
    Route::apiResource('vacationers', VacationersController::class)
    ->except('store', 'update');
    Route::apiResource('folders', FolderController::class);
    Route::apiResource('files', FilesController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('pages', PagesController::class);
    Route::apiResource('rooms', RoomsController::class);


});


Route::get('orders/show/{sessionId}', [OrdersController::class, "showBySession"])
    ->name('orders.showBySession');
Route::put('orders/update/{sessionId}', [OrdersController::class, "updateBySession"])
    ->name('orders.updateBySession');
Route::put('orders/updateStatus/{sessionId}', [OrdersController::class, "updateStatusBySession"])
    ->name('orders.updateStatusBySession');
Route::get('yachts', [YachtsController::class, 'index'])
    ->name('yachts.index');
Route::get('oceans', [OceansController::class, 'index'])
    ->name('oceans.index');
Route::get('trips', [TripsController::class, 'index'])
    ->name('trips.index');
Route::get('trips/{trip}', [TripsController::class, 'show'])
    ->name('trips.show');
Route::post('booking', [BooksController::class, 'store'])
    ->name('booking.store');
Route::get('payments', [MethodPaymentsController::class, 'getActive'])
    ->name('method_payments.active');
Route::post('vacationers', [VacationersController::class, 'store'])
    ->name('vacationers.store');
Route::put('vacationers/{vacationer}', [VacationersController::class, 'update'])
    ->name('vacationers.update');

