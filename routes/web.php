<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\DashboardController;

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

Route::get('admin', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard');
//Route::get('/admin', [Admin\DashboardController::class, 'index']);

Route::view('home', 'member/index')->middleware('auth');