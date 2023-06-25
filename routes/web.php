<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserAuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\VisaController;

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

//  Route::get('/hotel-search', [FormController::class, 'hotelsearch'])->name('hotelsearch');
Route::get('/hotel', [HotelController::class, 'hotel'])->name('hotel');
Route::post('/hotel', [HotelController::class, 'postStephotel1'])->name('postStephotel1');

Route::get('/stephotel2', [HotelController::class, 'stephotel2'])->name('stephotel2');
Route::post('/stephotel2', [HotelController::class, 'postStephotel2'])->name('postStephotel2');

Route::get('/stephotel3', [HotelController::class, 'stephotel3'])->name('stephotel3');
Route::post('/stephotel3', [HotelController::class, 'postStephotel3'])->name('postStephotel3');


Route::get('/visa', [VisaController::class, 'visa'])->name('visa');
Route::post('/visa', [VisaController::class, 'postStepvisa1'])->name('postStepvisa1');

Route::get('/stepvisal2', [VisaController::class, 'stepvisa2'])->name('stepvisa2');
Route::post('/stepvisa2', [VisaController::class, 'postStepvisa2'])->name('postStepvisa2');

Route::get('/stepvisa3', [VisaController::class, 'stepvisa3'])->name('stepvisa3');
Route::post('/stepvisa3', [VisaController::class, 'postStepvisa3'])->name('postStepvisa3');

// Route::get('/step1', [FormController::class, 'step1'])->name('step1');
// Route::post('/step1', [FormController::class, 'postStep1'])->name('postStep1');

Route::get('/step2', [FormController::class, 'step2'])->name('step2');
Route::post('/step2', [FormController::class, 'postStep2'])->name('postStep2');

Route::get('/step3', [FormController::class, 'step3'])->name('step3');
Route::post('/step3', [FormController::class, 'postStep3'])->name('postStep3');

Route::get('/signin', [FormController::class, 'signin'])->name('signin');
Route::get('/signup', [FormController::class, 'signup'])->name('signup');
Route::get('/tours', [FormController::class, 'tours'])->name('tours');
Route::get('/chartered', [FormController::class, 'chartered'])->name('chartered');
Route::get('/activities', [FormController::class, 'activities'])->name('activities');

Route::get('/success', [FormController::class, 'success'])->name('success');
Route::get('/hotelsuccess', [HotelController::class, 'hotelsuccess'])->name('hotelsuccess');
Route::get('/visasuccess', [VisaController::class, 'visasuccess'])->name('visasuccess');

Route::get('/flight-search', [FormController::class, 'flightsearch'])->name('flightsearch');

Route::get('/my-booking', [FormController::class, 'mybooking'])->name('mybooking');


Route::controller(UserAuthController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');

    Route::post('validate_login', 'validate_login')->name('auth.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('my-profile', 'myprofile')->name('myprofile');
    // Route::get('my-booking', 'mybooking')->name('mybooking');

    Route::get('manageusers', 'users')->name('users');

    Route::get('editprofile', 'editprofile')->name('editprofile');

    Route::post('validate_editprofile', 'validate_editprofile')->name('auth.validate_editprofile');

});