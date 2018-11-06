<?php


Route::get('/', 'SiteController@index');
Route::get('/home', 'SiteController@index');
Route::get('/noticias', 'SiteController@noticias');
Route::get('/eventos', 'SiteController@eventos');
Route::get('/sobre', 'SiteController@sobre');
Route::get('/contato', 'SiteController@contato');
Route::post('/contato', 'SiteController@contato2');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {

    Route::get('/', 'DashboardController@index');

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', 'UsuariosController@index');
        Route::get('create', 'UsuariosController@create');
        Route::post('create', 'UsuariosController@create2');
        Route::get('update', 'UsuariosController@update');
        Route::post('update', 'UsuariosController@update2');
        Route::get('destroy', 'UsuariosController@destroy');
    });

    Route::group(['prefix' => 'contato'], function () {
        Route::get('/', 'ContatoController@index');
        Route::get('create', 'ContatoController@create');
        Route::post('create', 'ContatoController@create2');
        Route::get('update', 'ContatoController@update');
        Route::post('update', 'ContatoController@update2');
        Route::get('destroy', 'ContatoController@destroy');
    });

    Route::group(['prefix' => 'sobre'], function () {
        Route::get('/', 'SobreController@index');
        Route::post('update', 'SobreController@update');
    });

    Route::group(['prefix' => 'eventos'], function () {
        Route::get('/', 'EventosController@index');
        Route::get('create', 'EventosController@create');
        Route::post('create', 'EventosController@create2');
        Route::get('update', 'EventosController@update');
        Route::post('update', 'EventosController@update2');
        Route::get('destroy', 'EventosController@destroy');
    });

    Route::group(['prefix' => 'noticias'], function () {
        Route::get('/', 'NoticiasController@index');
        Route::get('create', 'NoticiasController@create');
        Route::post('create', 'NoticiasController@create2');
        Route::get('update', 'NoticiasController@update');
        Route::post('update', 'NoticiasController@update2');
        Route::get('destroy', 'NoticiasController@destroy');
    });

});