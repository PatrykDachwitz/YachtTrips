<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\admin\ManagerFilesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\ViewsController as PageAdminController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\SummaryOrderController;

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
/*
Route::get('/cart/{idOrder}-{numberOrder}', SummaryOrderController::class)
->name('summaryOrder');*/


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


Route::view('/oceans', 'pages.oceans')->name('page.oceans');
Route::view('/yachts', 'pages.yachts')->name('page.yachts');


//Pages and cart Controller
Route::get('/cart', [OrderController::class, 'mainPage'])
->name('cart');

Route::group([
   "as" => "cart.",
   "prefix" => "cart/"
], function () {

    Route::get('', [OrderController::class, 'index'])
        ->name('index');

    Route::post('', function () {
        return redirect(\route('cart.personalData'));
    });

    Route::post('personal-data', [OrderController::class, 'setPersonalData']);

    Route::get('personal-data', [OrderController::class, 'getPersonalData'])
        ->name('personalData');

    Route::get('vacationers', [OrderController::class, 'getVacationers'])
        ->name('vacationers');

    Route::post('vacationers', [OrderController::class, 'setVacationers']);

    Route::get('payments', [OrderController::class, 'getPayments'])
        ->name('payments');

});

Route::get('/{slug}', PageController::class)
    ->name('pages');


//MainPage
Route::get('/', MainPageController::class);

Route::group([
    'prefix' => "admin/",
    'as' => "admin.",
], function () {

    Route::get('login', function () {
        return view('admin.login');
    })
        ->name("login");
    Route::post('login', LoginController::class)
        ->name("login");

    Route::get('{any}', function () {
        return view('admin');
    })
        ->middleware("auth:sanctum")
        ->where("any", ".*")
        ->name('index');
});
