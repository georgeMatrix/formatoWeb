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
    return view('pages.welcome');
});

Route::get('welcome', function () {
    return view('pages.welcome');
});

Route::get('mantenimiento', function () {
    return view('pages.mantenimiento');
});

Route::get('programacion', function () {
    return view('pages.programacion');
});

Route::get('paginasWeb', function () {
    return view('pages.paginasWeb');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});

Route::get('friki', 'FrikiController@index')->name('inicioF');

Route::get('frikiAbout', 'FrikiController@about')->name('aboutF');
Route::get('frikiPrecios', 'FrikiController@precio')->name('precioF');
Route::get('frikiContacto', 'FrikiController@contacto')->name('contactoF');

Route::get('paisajista', 'PaisajistaController@inicio')->name('inicioP');