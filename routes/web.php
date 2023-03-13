<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Auth::routes();





Route::group(['middleware' => ['auth']], function () {
  Route::get('profile', [HomeController::class, 'profile'])->name('profile.edit');
  Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
});
