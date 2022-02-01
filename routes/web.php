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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/vendorpartnership', function () {
    return view('vendorpartnership');
});

Route::get('/independentcontractor', function () {
    return view('independentcontractor');
});

Route::get('/networksupport', 'ServicesController@networksupport')->name('networksupport');

Route::get('/serversupport', 'ServicesController@serversupport')->name('serversupport');

Route::get('/desktopsupport', 'ServicesController@desktopsupport')->name('desktopsupport');

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/contact/submit', 'MessagesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
