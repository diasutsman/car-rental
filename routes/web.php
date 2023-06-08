<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\NavigationController;

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

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::resource('cars', CarController::class);

Route::resource('rentals', RentalController::class)->middleware('auth')->except(['store']);
Route::post('/book/{car}', [RentalController::class, 'store'])->name('book-car');

Route::get('/blog-posts', [NavigationController::class, 'blogs'])->name('blogs');

Route::get('/blog-post', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonials', function () {
    return view('testi');
})->name('testi');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();
