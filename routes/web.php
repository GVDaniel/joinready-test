<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']);
Route::get('users', [UserController::class, 'users'])->name('user.list');
Route::get('transactions/{id}', [UserController::class, 'transactions'])->name('user.transactions');
Route::get('users/{id}', [UserController::class, 'show'])->name('user');
