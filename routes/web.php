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

Auth::routes();

Route::get('/p/create', [App\Http\Controllers\PostsControllers::class, 'create']);
Route::get('/p/{post}', [App\Http\Controllers\PostsControllers::class, 'show']);
Route::post('/p', [App\Http\Controllers\PostsControllers::class, 'store']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesControllers::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesControllers::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesControllers::class, 'update'])->name('profile.update');

 