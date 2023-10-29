<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryBannerController;

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


        Route::group([
            "as" => "category.",
            "prefix" => "category"
        ], function () {

            Route::get("", [CategoryBannerController::class, 'index'])
                ->name('index');

            Route::get("create", [CategoryBannerController::class, 'create'])
                ->name('create');

            Route::get("{id}/edit", [CategoryBannerController::class, 'edit'])
                ->name('edit');

            Route::get("{id}", [CategoryBannerController::class, 'show'])
                ->name('show');
        });


        Route::get("", [BannerController::class, 'index'])
            ->name('index');

        Route::get("create", [BannerController::class, 'create'])
            ->name('create');

        Route::get("{id}/edit", [BannerController::class, 'edit'])
            ->name('edit');

        Route::get("{id}", [BannerController::class, 'show'])
            ->name('show');

    });
});
