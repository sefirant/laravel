<?php
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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'Get@retrive'); 
});

Route::get('/', function () {
    return view('Welcome');
});
Auth::routes();
Route::get('/home', 'BukuController@show');
Route::resource('buku', 'BukuController');
// ->name('home')