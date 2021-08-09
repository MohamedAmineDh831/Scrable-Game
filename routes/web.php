<?php


use App\Http\Controllers\PostController;

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

Route::get('/inscrit',[PostController::class,'index1'])->name('inscrit');
Route::get('/',[PostController::class,'test'])->name('test');
Route::get('/login',[PostController::class,'index2'])->name('login');

