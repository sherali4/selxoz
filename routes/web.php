<?php

use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/hello/{name?}', function ($name=null){
    return 'Hello World'.$name;
});

Route::get('/user/{name?}', [UserController::class,'show']);
Route::get('/users/{name?}', [UserController::class,'list']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/members', [HomeController::class,'members']);
Route::get('/about', [HomeController::class,'about']);

Route::resource('companies',CompaniesController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');