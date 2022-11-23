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
    return view('index');
});


Route::get('/adminn', function () {
    return view('admin.html.login');
});


Route::get('/login', function () {
    //return view('admin.html.login');


    return Redirect::to('https://wmc-ksa.com/royalnew/');
});


Route::post('/cu', 'App\Http\Controllers\CheckAdmin@login');

Route::view('/o', 'welcome');

Route::view('/dash', 'admin.html.index')->name('dash');
Route::view('/show_registers', 'admin.html.tables');

 

Route::post('/orders', 'App\Http\Controllers\Orders@login');