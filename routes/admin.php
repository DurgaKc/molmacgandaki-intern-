<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\LawcategoryController;
use App\Http\Controllers\Admin\LawController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PublicationCategoryController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubordinateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::resource('slider', SliderController::class);

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
// });

Route::resource('department', DepartmentController::class);
Route::resource('designation', DesignationController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('setting', SettingController::class);
Route::resource('link', LinkController::class);
Route::resource('newsCategory', NewsCategoryController::class);
Route::resource('news', NewsController::class);
Route::resource('publicationCategory', PublicationCategoryController::class);
Route::resource('publication', PublicationController::class);
Route::resource('lawCategory', LawCategoryController::class);
Route::resource('law', LawController::class);
Route::resource('subordinate', SubordinateController::class);






