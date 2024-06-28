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
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });

Route::get('/', function () {
    return view('frontend.index');
});

Route::any('/Index', [App\Http\Controllers\FrontController::class, 'index'])->name('Index');
Route::get('/about-us', [App\Http\Controllers\FrontController::class, 'about'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact-us');
Route::get('/menu', [App\Http\Controllers\FrontController::class, 'menu'])->name('menu');
Route::get('/event', [App\Http\Controllers\FrontController::class, 'event'])->name('event');

