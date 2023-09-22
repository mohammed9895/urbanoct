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

Route::get('/', \App\Livewire\Frontend\Home::class);

Route::get('/activities', \App\Livewire\Frontend\Activities::class)->name('activities.index');
Route::get('/registration', \App\Livewire\Frontend\Register::class)->name('registration.index');
Route::get('/speaker/{speaker}', \App\Livewire\Frontend\Speaker::class)->name('speaker.index');

Route::get('/language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    session()->get('locale');
    return redirect()->back();
})->name('language.switch');
