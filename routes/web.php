<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/users',[UserController::class,'GetAll'])->name('users');
// Route::get('/users',[UserController::class,'Index'])->name('users');
// Route::get('/users/all',[UserController::class,'GetAll'])->name('users.all');
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('/data', [UserController::class, 'GetAll'])->name('data');
});

Route::get('users/create',[UserController::class,'Create'])->name('users.create');
Route::post('users/store',[UserController::class,'Store']);
// Route::post('users/store',[UserController::class,'Store']);


