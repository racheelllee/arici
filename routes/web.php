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

/* --- FRONT --- */
Route::get('/', 'FrontController@philosophie')->name('accueil');
// Route::get('/philosophie', 'FrontController@philosophie')->name('philosophie');
Route::get('/prestations', 'FrontController@prestations')->name('prestations');
Route::get('/realisations/{category?}', 'FrontController@realisations')->name('realisations');
Route::get('/realisation/{slug}', 'FrontController@realisation')->name('realisation');
Route::get('/organisation', 'FrontController@organisation')->name('organisation');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('/contact', 'FrontController@sendMail')->name('contact.sendMail');


/* --- BACK --- */
// Authentication Routes...
Route::get('dashboard', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('dashboard', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('dashboard/usuarios/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('dashboard/usuarios/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('dashboard/usuarios/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('dashboard/usuarios/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('dashboard/usuarios/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('dashboard/usuarios/password/reset', 'Auth\ResetPasswordController@reset');

//USUARIOS
Route::get('dashboard/usuarios', 'HomeController@index')->name('home');
Route::get('dashboard/usuarios/edit/{id}', 'Auth\RegisterController@edit')->name('edit');
Route::post('dashboard/usuarios/update/{id}', 'Auth\RegisterController@update')->name('update');
Route::get('dashboard/usuarios/delete/{id}', 'Auth\RegisterController@delete')->name('delete');

//PAGINAS
Route::resource('dashboard/paginas', 'PaginasController');
Route::post('dashboard/checkslug', 'PaginasController@checkslug');
Route::delete('dashboard/paginas/removeimg/{id}', 'PaginasController@removeimg');

//PRODUCTOS
Route::resource('dashboard/productos', 'ProductosController');
Route::post('dashboard/checkslugproducts', 'ProductosController@checkslug');
Route::delete('dashboard/productos/removeimg/{id}', 'ProductosController@removeimg');

//DATOS GENERALES
Route::get('dashboard/datos_generales', 'DatosGeneralesController@index');
Route::get('dashboard/datos_generales/{id}/edit', 'DatosGeneralesController@edit')->name('datos_generales.edit');
Route::put('dashboard/datos_generales/{id}/update', 'DatosGeneralesController@update')->name('datos_generales.update');
