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

Route::get('/', [Controllers\AccueilController::class, 'index'])->name('index');
Route::get('locale/{lang}', [Controllers\LocalizationController::class, 'setLang']);
Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/activites', [Controllers\ActiviteController::class, 'index'])->name('activites');
Route::get('/blogs', [Controllers\BlogController::class, 'index'])->name('blogs');
Route::resource('/contacts', Controllers\ContactController::class);
Route::resource('/dons', Controllers\DonController::class);
Route::resource('/partenaires', Controllers\PartenaireController::class);
Route::resource('/galeries', Controllers\GalerieController::class);
Route::resource('/stories', Controllers\StoryController::class);
Route::resource('/bulletins', Controllers\BulletinController::class);

Auth::routes();

Route::get('/login', [Controllers\AdminController::class, 'login'])->name('login');
//Route::get('/admin-login', [Controllers\AdminController::class, 'login'])->name('login');
Route::post('/admin-login', [Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin-home', [Controllers\AdminController::class, 'home'])->name('admin.home');
Route::get('/register', [Controllers\AdminController::class, 'register'])->name('register');
Route::post('/admin-register', [Controllers\AdminController::class, 'adminRegister'])->name('admin.register');
Route::get('/admin-bulletin', [Controllers\AdminController::class, 'bulletin'])->name('admin.bulletin');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
