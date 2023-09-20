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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/activities', [\App\Http\Controllers\HomeController::class, 'activities'])->name('activities.index');
Route::get('/registration', [\App\Http\Controllers\HomeController::class, 'registration'])->name('registration.index');

Route::get('/language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    session()->get('locale');
    return redirect()->back();
})->name('language.switch');
