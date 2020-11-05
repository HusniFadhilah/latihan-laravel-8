<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComingSoonController;

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

Route::get('/comingsoon', [ComingSoonController::class, 'index'])->name('comingsoon');

// Route::get('/', [BlogController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('blog', BlogController::class);
Route::post('ckeditor/upload', [UploadController::class, 'upload'])->name('upload.upload');
Route::post('ckeditor/store', [UploadController::class, 'store'])->name('upload.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'check_login'])->name('login.check_login');
