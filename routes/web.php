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
Route::get('/admin', DashboardController::class)
    ->middleware('auth:sanctum')
    ->name('admin.dashboard');
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
    Route::post('/logout', LogOutController::class)
        ->name('logout');


    Route::get('{views}', [PageAdminController::class, 'index'])
        ->name('views.index');
    Route::get('{views}/create', [PageAdminController::class, 'create'])
        ->name('views.create');
    Route::get('{views}/{id}/edit', [PageAdminController::class, 'edit'])
        ->name('views.edit');
    Route::get('{views}/{id}', [PageAdminController::class, 'show'])
        ->name('views.show');

});


