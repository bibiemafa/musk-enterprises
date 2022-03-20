<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('supervisor', 'App\Http\Controllers\SupervisorContoller')->middleware('role:supervisor');
Route::resource('manager', 'App\Http\Controllers\ManagerController')->middleware('role:manager');
Route::resource('users', 'App\Http\Controllers\UserController')->middleware('role:manager');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
