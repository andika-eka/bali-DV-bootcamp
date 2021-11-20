<?php
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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



Route::resource('dashboard', WisataController::class);

//route dashboard pakek ngetes
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login.view');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/register', [AuthController::class, 'register'])->name('register.view'); 
Route::post('/register-login', [AuthController::class, 'customRegister'])->name('register.custom'); 
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');
