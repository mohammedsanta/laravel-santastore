<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SoldController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MeetsController;
use App\Http\Controllers\NeedsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HowManyController;
use App\Http\Controllers\CustomerController;

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

Route::get('/',fn() => view('home'));



// All Users
Route::get('auth/users',[AuthController::class,'index'])->name('auth.users');
// Login View
Route::get('auth/login',[AuthController::class,'view'])->name('login')->middleware('guest');
// Login
Route::post('auth/login',[AuthController::class,'login'])->name('auth.login')->middleware('guest');
// Login
Route::post('auth/logout',[AuthController::class,'logout'])->name('auth.logout');

// SignUp View
Route::get('auth/signup',[AuthController::class,'signup']);
// SignUp Store
Route::post('auth/signup',[AuthController::class,'store'])->name('auth.signup');
// User Edit
Route::get('auth/{id}/edit',[AuthController::class,'edit'])->name('auth.edit');
Route::post('auth/{id}/edit',[AuthController::class,'update']);



/////////////////////////////////////////////////////////////////////////////////////

// Customers Page

Route::resource('customers',CustomerController::class);

// Items Page

Route::resource('items',ItemsController::class);
Route::get('/',[ItemsController::class,'index'])->middleware('auth');

// Meets Page

Route::resource('meets',MeetsController::class);

// Sold Page

Route::resource('sold',SoldController::class);

// Needs Page

Route::resource('needs',NeedsController::class);

// History Page

Route::resource('history',HistoryController::class);

// How Many Page

Route::resource('howmany',HowManyController::class);