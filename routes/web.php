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


Auth::routes();

Route::get('/home', 'HomeController@index');





Route::resource('pertanyaans', 'PertanyaanController');

Route::resource('umurs', 'UmurController');

Route::resource('bobots', 'BobotController');

Route::resource('beratdantinggis', 'BeratdantinggiController');

Route::resource('keyakinans', 'KeyakinanController');

Route::resource('riwayatCideras', 'RiwayatCideraController');

Route::resource('keyakinanBeratdantinggis', 'KeyakinanBeratdantinggiController');

Route::resource('keyakinanUmurs', 'KeyakinanUmurController');

Route::resource('pertanyaans', 'PertanyaanController');

Route::resource('bobots', 'BobotController');