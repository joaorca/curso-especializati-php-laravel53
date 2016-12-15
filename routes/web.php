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

Route::get('/empresa', function () {
    return view('empresa');
})->name('rota.empresa');

Route::get('/contato', function () {
    return 'contato';
})->name('rota.contato');

Route::get('/', function () {
    #return view('welcome');
    return redirect()->route('rota.empresa');
});

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {
    Route::get('/users', function () {
        return 'Controle de Users';
    });
    Route::get('/financeiro', function () {
        return 'Financeiro Painel';
    });
    Route::get('/', function () {
        return 'Dashbaord';
    });
});

Route::get('/login', function () {
    return 'LOGIN';
})->name('rota.login');