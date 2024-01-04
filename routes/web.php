<?php

use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\ClientsController;
use App\Http\Controllers\admin\PaymentsController;
use App\Http\Controllers\admin\RoomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryBannerController;
use App\Http\Controllers\admin\OceanController;
use App\Http\Controllers\admin\TripController;
use App\Http\Controllers\admin\YachtController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\admin\ManagerFilesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\OrdersController as OrdersControllerAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//MainPage
Route::get('/', MainPageController::class);

Route::view('/login', "login")
    ->name('login');
Route::POST('/login', LoginController::class)
    ->name('login');

//Trips Controller
Route::group([
    'prefix' => 'trips/',
    'as' => "page.trips.",
], function () {
    Route::get('', [TripsController::class, 'index'])
        ->name('index');
    Route::get('{slug}', [TripsController::class, 'show'])
        ->name('show');
});
Route::view('/tript', 'templateTrips');
//Pages and cart Controller
Route::get('/koszyk', OrderController::class);
Route::get('/{slug}', PageController::class)
    ->name('pages');



//CMS routing
Route::group([
     "as" => "admin.",
     "prefix" => "admin/",
    "middleware" => "auth:sanctum"
], function () {


    Route::get('file_manager', ManagerFilesController::class);


    Route::get('{views}', [\App\Http\Controllers\admin\TestController::class, 'index'])
        ->name('views.index');
    Route::get('{views}/create', [\App\Http\Controllers\admin\TestController::class, 'create'])
        ->name('views.create');
    Route::put('{views}/{id}', [\App\Http\Controllers\admin\TestController::class, 'edit'])
        ->name('views.edit');
    Route::get('{views}/{id}', [\App\Http\Controllers\admin\TestController::class, 'show'])
        ->name('views.show');

    /*
    Route::group([
        "prefix" => "categories/",
        "as" => "categories.",
        ], function () {
        Route::resource('banners', CategoryBannerController::class)
            ->only(['index', 'create', 'edit', 'show']);
    });


    Route::resource('banners', BannerController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('oceans', OceanController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('trips', TripController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('pages', PageController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('yachts', YachtController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('orders', OrdersControllerAdmin::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('booking', BookingController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('payments', PaymentsController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('clients', ClientsController::class)
        ->only(['index', 'create', 'edit', 'show']);

    Route::resource('rooms', RoomsController::class)
        ->only(['index', 'create', 'edit', 'show']);
*/
    Route::get('logout', function () {

    })
    ->name('logout');
});


