<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MailController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('creating', [\App\Http\Controllers\CreatingController::class, 'index']);
Route::get('information', [\App\Http\Controllers\InformationController::class, 'index']);
Route::get('economic', [\App\Http\Controllers\EconomicController::class, 'index']);
Route::get('physic', [\App\Http\Controllers\PhysicController::class, 'index']);
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::post('send-mail', [MailController::class, 'index'])->name('send-mail');
Auth::routes();

Route::prefix('adm')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, "index"])->name('service');
    Route::resource('home', AdminController::class);
    Route::get('slider', [\App\Http\Controllers\Admin\AdminController::class, "slider"])->name('slider');
    Route::get('slider/create', [\App\Http\Controllers\Admin\AdminController::class, "sliderCreate"])->name('sliderCreate');
    Route::post('slider/store', [\App\Http\Controllers\Admin\AdminController::class, "sliderStore"])->name('sliderStore');
    Route::get('slider/edit{id}', [\App\Http\Controllers\Admin\AdminController::class, "sliderEdit"])->name('sliderEdit');
    Route::put('slider/update{id}', [\App\Http\Controllers\Admin\AdminController::class, "sliderUpdate"])->name('sliderUpdate');
    Route::post('slider/destroy{id}', [\App\Http\Controllers\Admin\AdminController::class, "sliderDelete"])->name('sliderDelete');
    Route::resource('contact', \App\Http\Controllers\Admin\Contacts::class);
});
