<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SliderController;

Route::controller(FrontendController::class)->group(function(){
 Route::get('/', 'index')->name('index');
 Route::get('citizen', 'citizen')->name('citizen');
 Route::get('employee', 'employee')->name('employee');
 Route::get('introduction', 'introduction')->name('introduction');
Route::get('organization','organization')->name('organization');
Route::get('workarea','workarea')->name('workarea');
Route::get('agri','agri')->name('agri');
Route::get('land','land')->name('land');
Route::get('lives','lives')->name('lives');
Route::get('planning','planning')->name('planning');
Route::get('act', 'act')->name('act');
Route::get('document','document')->name('document');
Route::get('procedure','procedure')->name('procedure');
Route::get('agdv','agdv')->name('agdv');
Route::get('criteria','criteria')->name('criteria');
Route::get('others','others')->name('others');
Route::get('other','other')->name('other');
Route::get('publication','publication')->name('publication');
Route::get('record','record')->name('record');
Route::get('ministry','ministry')->name('ministry');
Route::get('form','form')->name('form');
Route::get('business','business')->name('business');
Route::get('news','news')->name('news');
Route::get('photo','photo')->name('photo');
Route::get('vedio','vedio')->name('vedio');
Route::get('audio','audio')->name('audio');
Route::get('contact','contact')->name('contact');
Route::get('subordinate','subordinate')->name('subordinate');
});

Route::get('login',[AuthController::class,'loginPage'])->name('login.form');
Route::post('login',[AuthController::class,'login'])->name('login.signIn');



Route::get('logout',[AuthController::class,'logout'])->name('logout');
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');





// Route::get('slider','slider')->name('slider');
// Route::get('update{slider}', 'update')->name('update');
// Route::get('edit/{slider}', 'edit')->name('edit');
// Route::get('delete/{slider}', 'destroy')->name('delete');


