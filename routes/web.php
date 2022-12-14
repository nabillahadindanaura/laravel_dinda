<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, "index"])->name('home');
Route::get('/about', [AboutController::class, "index"])->name('about');
Route::get('/gallery', [GalleryController::class, "index"])->name('gallery');
Route::get('/contact', [ContactController::class, "index"])->name('contact');
Route::post('/contact/submit', [ContactController::class, "store"])->name('contact/submit');
Route::get('/contact/delete/{id}', [ContactController::class, "delete"]);


  