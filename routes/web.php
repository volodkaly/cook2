<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecController;
use Illuminate\Support\Facades\Auth;
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

 Route::get('/main', [RecController::class, 'index'])->name('main');
//   Route::get('/main2', [CommentController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/add', [HomeController::class, 'showAddRecForm'])
    ->name('rec.add');

Route::post('/home', [HomeController::class, 'storeRec'])
    ->name('rec.store');

Route::get(
    '/home/{rec}/edit',
    [HomeController::class, 'showEditRecForm']
)
    ->name('rec.edit');

Route::patch('/home/{rec}', [HomeController::class, 'updateRec'])
    ->name('rec.update');
Route::get(
    '/home/{rec}/delete',
    [HomeController::class, 'showDeleteRecForm']
)
    ->name('rec.delete');

Route::delete('/home/{rec}', [HomeController::class, 'destroyRec'])
    ->name('rec.destroy');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/{rec}', [RecController::class, 'detail'])->name('detail');

Route::resource('comments', CommentController::class);