<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryBannerController;
use App\Http\Controllers\admin\OceanController;
use App\Http\Controllers\admin\TemplateController;
use App\Http\Controllers\admin\TripController;
use App\Http\Controllers\admin\YachtController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\admin\ManagerFilesController;

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
Route::get('/travels', function () {
    return view('travels');
});
Route::get('/trip', function () {
    return view('trip');
});

//CMS routing
Route::group([
 "as" => "admin.",
 "prefix" => "admin/"
], function () {
    Route::get('file_manager', ManagerFilesController::class);

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

    Route::group([
        "as" => "oceans.",
        "prefix" => "oceans"
    ], function () {

        Route::get("", [OceanController::class, 'index'])
            ->name('index');

        Route::get("create", [OceanController::class, 'create'])
            ->name('create');

        Route::get("{id}/edit", [OceanController::class, 'edit'])
            ->name('edit');

        Route::get("{id}", [OceanController::class, 'show'])
            ->name('show');

    });

    Route::group([
        "as" => "trips.",
        "prefix" => "trips"
    ], function () {

        Route::get("", [TripController::class, 'index'])
            ->name('index');

        Route::get("create", [TripController::class, 'create'])
            ->name('create');

        Route::get("{id}/edit", [TripController::class, 'edit'])
            ->name('edit');

        Route::get("{id}", [TripController::class, 'show'])
            ->name('show');

    });

    Route::group([
        "as" => "templates.",
        "prefix" => "templates"
    ], function () {

        Route::get("", [TemplateController::class, 'index'])
            ->name('index');

        Route::get("create", [TemplateController::class, 'create'])
            ->name('create');

        Route::get("{id}/edit", [TemplateController::class, 'edit'])
            ->name('edit');

        Route::get("{id}", [TemplateController::class, 'show'])
            ->name('show');

    });

    Route::group([
        "as" => "yachts.",
        "prefix" => "yachts"
    ], function () {

        Route::get("", [YachtController::class, 'index'])
            ->name('index');

        Route::get("create", [YachtController::class, 'create'])
            ->name('create');

        Route::get("{id}/edit", [YachtController::class, 'edit'])
            ->name('edit');

        Route::get("{id}", [YachtController::class, 'show'])
            ->name('show');

    });

});
