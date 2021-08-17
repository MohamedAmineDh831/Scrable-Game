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


#Route::get('/login',[PostController::class,'index2'])->name('login');
#Route::get('/posts',[PostController::class,'index']);

Route::get('/nizar', [PostController::class, 'partie']);
Route::post('/nizar', [PostController::class, 'partie']);
Route::post('/nizar/n', [PostController::class, 'affichage'])->name('nizar.affichage');
Route::get('/nizar/n', [PostController::class, 'affichage'])->name('nizar.affichage');
Route::get('nizar/n/base', [PostController::class, 'base'])->name('n.base');
Route::post('nizar/n/base', [PostController::class, 'base'])->name('n.base');


Route::get('/inscrit',[PostController::class,'inscrit'])->name('inscrit');
Route::post('/inscrit',[PostController::class,'inscrit_post']);
Route::get('/',[PostController::class,'jeu'])->name('jeu');
Route::post('/',[PostController::class,'jeu_post'])->name('jeu');
Route::get('/login',[PostController::class,'login'])->name('login');
Route::get('/test',[PostController::class,'test'])->name('test');
Route::post('/login',[PostController::class,'login_post']);