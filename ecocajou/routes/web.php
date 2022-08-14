<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/activites', [Controllers\ActivitesController::class, 'index'])->name('activites');
Route::get('/blogs', [Controllers\BlogController::class, 'index'])->name('blogs');
Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');
