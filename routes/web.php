<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\MainPageController::class);

//CMS routing
Route::group([
 "as" => "admin.",
 "prefix" => "admin/"
], function () {
    Route::get('file_manager', \App\Http\Controllers\admin\ManagerFilesController::class);
    Route::group([
        "as" => "banners.",
        "prefix" => "banners"
    ], function () {
        Route::view("", "admin.banners.list")
        ->name('index');
        Route::view("{id}", "admin.banners.show")
        ->name('show');
        Route::group([
            "as" => "category.",
            "prefix" => "category"
        ], function () {
            Route::view("", "admin.banners.category.list")
                ->name('index');
        });
    });
;
});
