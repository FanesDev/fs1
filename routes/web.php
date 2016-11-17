<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('pessoas', 'PersonController');

Route::resource('telefones_pessoais', 'PersonalPhoneController');

Route::resource('enderecos_pessoais', 'PersonalAddressController');

Route::resource('emails_pessoais', 'PersonalEmailController');

Route::resource('suplementos_pessoais', 'PersonalSupplementController');

Route::resource('empresas', 'CompanyController');

Route::resource('contatos_corporativos', 'BusinessContactController');

Route::resource('emails_corporativos', 'BusinessEmailController');

Route::resource('clientes', 'CustomerController');

