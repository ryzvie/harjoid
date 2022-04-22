<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

//USER CONTROLLER
Route::get('/', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register/add', [UserController::class, 'registeradd']);
Route::get('success/', [UserController::class, 'succeess']);

//ADMIN CONTROLLER
Route::get('admin/', [AdminController::class, 'index']);
Route::post('admin/authlogin', [AdminController::class, 'authlogin']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

//PELANGGAN
Route::get('admin/pelanggan', [AdminController::class, 'pelanggan']);
Route::get('admin/pelanggan/add', [AdminController::class, 'pelangganadd']);
Route::post('admin/pelanggan/post', [AdminController::class, 'pelangganpost']);
Route::get('admin/pelanggan/edit/{id}', [AdminController::class, 'pelangganedit']);
Route::get('admin/pelanggan/delete/{id}', [AdminController::class, 'pelanggandelete']);