<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Home');
// });

Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::get('/user/{user}',[UserController::class,'show'])->name('user.show');
Route::post('/user',[UserController::class,'store'])->name('user.store');
Route::get('/user/{user}/edit',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{user}',[UserController::class,'destroy'])->name('user.destroy');

// Route::resource('user', UserController::class);


require __DIR__ . '/auth.php';
