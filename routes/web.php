<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FilePondController;
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

Auth::routes();

// Filepond
Route::post('filepond/process', [FilePondController::class, 'process'])->name('uploads.process');
