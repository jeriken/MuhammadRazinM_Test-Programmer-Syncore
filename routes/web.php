<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('actionlogin', [UserController::class, 'actionlogin'])->name('actionlogin');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('actionregister', [UserController::class, 'actionregister'])->name('actionregister');

Route::get('edit', [UserController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('actionedit', [UserController::class, 'actionedit'])->name('actionedit');

Route::get('tambahbio', [BiodataController::class, 'tambahbio'])->name('tambahbio')->middleware('auth');
Route::post('actiontambahbio', [BiodataController::class, 'actiontambahbio'])->name('actiontambahbio');

Route::get('editbio', [BiodataController::class, 'editbio'])->name('editbio')->middleware('auth');
Route::post('actioneditbio', [BiodataController::class, 'actioneditbio'])->name('actioneditbio');

Route::get('home', [UserController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [UserController::class, 'actionlogout'])->name('action\logout')->middleware('auth');

Route::get('admin', [UserController::class, 'index'])->name('admin')->middleware(['auth', 'admin']);
