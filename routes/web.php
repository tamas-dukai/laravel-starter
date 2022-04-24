<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Member\MemberController;

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
    $meta_title = "Page meta title";
    $meta_description = "Page meta description";
    return view('welcome', compact('meta_title', 'meta_description'));
});


// Routes for Admin group
Route::group([
    'as'=>'admin.',
    'prefix'=>'admin',
    'namespace'=>'Admin',
    'middleware' => ['auth', 'admin']],

    function() {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    }
);


// Routes for members
Route::group([
    'as'=>'member.',
    'prefix'=>'member',
    'namespace'=>'Member',
    'middleware' => ['auth']],

    function() {
        
        Route::get('dashboard', [MemberController::class, 'index'])->name('dashboard');
        
    }
);