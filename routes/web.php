<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();

Route::post('follow/{user}',[App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/', [App\Http\Controllers\PostsControllers::class, 'index']);
Route::get('/p/create', [App\Http\Controllers\PostsControllers::class, 'create']);
Route::post('/p', [App\Http\Controllers\PostsControllers::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\PostsControllers::class, 'show']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesControllers::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesControllers::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesControllers::class, 'update'])->name('profile.update');

 