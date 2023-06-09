<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserAuthController;

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

// Route::get('/', function () {
//     return view('admin/index');
// });

Route::controller(UserAuthController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');

    Route::post('validate_login', 'validate_login')->name('auth.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::get('manageusers', 'users')->name('users');

    Route::get('editprofile', 'editprofile')->name('editprofile');

    Route::post('validate_editprofile', 'validate_editprofile')->name('auth.validate_editprofile');

});