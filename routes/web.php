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
<<<<<<< HEAD
Route::resource('manager', 'App\Http\Controllers\ManagerController');
Route::resource('client', 'App\Http\Controllers\ClientController');
Route::resource('inspector', 'App\Http\Controllers\InspectorController');
Route::resource('reports', 'App\Http\Controllers\ReportsController');
Route::resource('users', 'App\Http\Controllers\UserController');
=======
Route::resource('supervisor', 'App\Http\Controllers\SupervisorContoller')->middleware('role:supervisor');
Route::resource('manager', 'App\Http\Controllers\ManagerController')->middleware('role:manager');
Route::resource('users', 'App\Http\Controllers\UserController')->middleware('role:manager');
>>>>>>> d2aa1322f3fb021367f3671b0613a91f7c8b08db
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/savepdf', [App\Http\Controllers\ReportsController::class, 'pdf'])->name('pdf');
