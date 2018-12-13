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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/invoice', function () {

    $pdf = PDF::loadView('invoice');
    return $pdf->download('invoice.pdf');
    return view('invoice');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts',array('as'=>'pdfindex','uses'=>'PostController@index'));
Route::get('pdfview',array('as'=>'pdfview','uses'=>'PostController@pdfview'));
