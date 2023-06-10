<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserAuthController;
use App\Http\Controllers\FormController;

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

 Route::get('/', [FormController::class, 'index'])->name('index');
 Route::post('/', [FormController::class, 'postStep1'])->name('postStep1');

// Route::get('/step1', [FormController::class, 'step1'])->name('step1');
// Route::post('/step1', [FormController::class, 'postStep1'])->name('postStep1');

Route::get('/step2', [FormController::class, 'step2'])->name('step2');
Route::post('/step2', [FormController::class, 'postStep2'])->name('postStep2');

Route::get('/step3', [FormController::class, 'step3'])->name('step3');
Route::post('/step3', [FormController::class, 'postStep3'])->name('postStep3');


Route::get('/hotel', [FormController::class, 'hotel'])->name('hotel');
Route::get('/visa', [FormController::class, 'visa'])->name('visa');
Route::get('/chartered', [FormController::class, 'chartered'])->name('chartered');
Route::get('/activities', [FormController::class, 'activities'])->name('activities');

Route::get('/success', [FormController::class, 'success'])->name('success');

Route::get('/flight-search', [FormController::class, 'flightsearch'])->name('flightsearch');


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