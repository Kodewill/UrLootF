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

Route::redirect('/', 'urloot');

Auth::routes();

Route::get('urloot', 'Web\PageController@urloot')->name('urloot');
Route::get('curso', 'Web\PageController@urloot')->name('subject');
Route::get('profesor', 'Web\PageController@urloot')->name('professor
');

