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
        Route::get('/', 'ContatosController@index');
        Route::get('create', 'ContatosController@create');
        Route::post('create', 'ContatosController@create2');
        Route::get('update', 'ContatosController@update');
        Route::post('update', 'ContatosController@update2');
        Route::get('destroy', 'ContatosController@destroy');
    });

    Route::group(['prefix' => 'sobre'], function () {
        Route::get('/', 'SobreController@index');
        Route::post('update', 'SobreController@update');
    });

});