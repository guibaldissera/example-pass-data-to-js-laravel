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

	JavaScript::put([
        'name' => 'Peter John',
        'age' => 22,
        'suns' => ([
        	['name' => 'Sophia'],
        	['name' => 'Peter Jr'],
        ]), 
    ]);

    return view('welcome');
});
