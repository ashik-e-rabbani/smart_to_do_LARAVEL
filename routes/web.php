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

Route::get('/', 'postController@index');
Route::post('/insert', 'postController@indexPost');

// Route::get('/{name}', 'postController@index_');


Route::get('/save', function () {
    return '<h4> Saved </h4>';
});
