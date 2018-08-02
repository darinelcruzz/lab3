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
    return view('web.index');
});

Route::get('generic', function () {
    return view('web.generic');
});

Route::get('landing', function () {
    return view('web.landing');
});

Route::get('elements', function () {
    return view('web.elements');
});

Route::group(['prefix' => 'plantillas', 'as' => 'template.'], function () {
	$ctrl = 'TemplateController';

	Route::get('/', usesas($ctrl, 'index'));
	Route::get('{template}', usesas($ctrl, 'show'));
});
