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

Route::get('diseno', function () {
    return view('pages.diseno');
});

Route::get('conoce', function () {
    return view('pages.conoce');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});

Route::get('muestra', function () {
    return view('pages.muestra');
});

/*Route::get('blogF', function(){
    return view('pages.blog');
});*/

Route::get('blogR', 'PagesController@home');

Route::get('blogSingle', function(){
    return view('pages.blogSingle');
});


Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'],
    function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('posts', 'PostController@index')->name('pages.admin.posts.index');
    Route::get('posts/create', 'PostController@create')->name('pages.admin.posts.create');
    //rutas de administracion
});



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('prueba', function(){
    return \App\Post::all();
});

Route::get('tienda', 'TiendaController@index');

Route::get('friki', 'FrikiController@index')->name('inicioF');

Route::get('frikiAbout', 'FrikiController@about')->name('aboutF');
Route::get('frikiPrecios', 'FrikiController@precio')->name('precioF');
Route::get('frikiContacto', 'FrikiController@contacto')->name('contactoF');

Route::get('paisajista', 'PaisajistaController@inicio')->name('inicioP');

Route::get('business', 'BusinessController@inicio')->name('inicioBus');