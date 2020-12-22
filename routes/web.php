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

// Route::get('/login', [TestLoginController::class, 'redirectToProvider']);
// Route::get('/receive-socialite-auth-code', [TestLoginController::class, 'handleProviderCallback']);

Route::get('/puta', [TestLoginController::class, 'puta']);
Route::get('/login', 'TestLoginController@redirectToProvider');
Route::get('/receive-socialite-auth-code', 'TestLoginController@handleProviderCallback');



Route::get('/fuck', function () {
    return "hello fucker";
});



Route::get('/', function () {
    return view('welcome');
});
