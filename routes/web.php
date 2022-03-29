<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::resource('reports', 'App\Http\Controllers\ReportsController');
Route::middleware(['auth', 'isManager'])->group(function () {
    Route::resource('client', 'App\Http\Controllers\ClientController');
    Route::resource('inspector', 'App\Http\Controllers\InspectorController');  
    Route::resource('manager', 'App\Http\Controllers\ManagerController');
    Route::resource('users', 'App\Http\Controllers\UserController');

});

Route::middleware(['auth', 'isInspector'])->group(function () {
    Route::resource('client', 'App\Http\Controllers\ClientController');
    Route::resource('inspector', 'App\Http\Controllers\InspectorController');
   
});
Route::middleware(['auth', 'isSupervisor'])->group(function () {

    Route::resource('supervisor', 'App\Http\Controllers\SupervisorContoller');
    //Route::resource('inspector', 'App\Http\Controllers\InspectorController');
 
});
Route::middleware(['auth', 'isClient'])->group(function () {
    Route::resource('client', 'App\Http\Controllers\ClientController');
});
