<?php

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('about');
});

Route::get('/', function () {
    return view('review');
});

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('post', App\Http\Controllers\PostController::class);
Route::get('/about', [App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/review', [App\Http\Controllers\ReviewController::class,'index'])->name('review');
//Route::resource('review', App\Http\Controllers\ReviewController::class);
//Route::post('/', [App\Http\Controllers\ReviewController::class, 'postCreate'])->name('profile.postCreate');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'postCreate'])->name('profile.postCreate');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/{id}/update', [App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.postEdit');

