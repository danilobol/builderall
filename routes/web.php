<?php

use Illuminate\Support\Facades\Route;

/*
/*Index painel de controle que só pode ser acessado por rank == 2
/*Acesso é controlado pela middleware checkadmin apelido de CheckIsAdminMiddleware
*/

Route::prefix('painel')->group(function () {
    Route::get('/', ['as' => 'index', 'uses' => 'Admin\ClientesController@index'])->middleware(['auth', 'checkadmin']);

});


/*
/*Filtro de busca
/*
*/

Route::any('clientes/search','Admin\ClientesController@search')->name('clientes.search');
Route::resource('clientes','Admin\ClientesController');


/*
/*Painel de controle que só pode ser acessado por rank == 2
/*Acesso é controlado pela middleware checkadmin apelido de CheckIsAdminMiddleware
*/

Route::get('/admin/clients', ['as'=>'admin.clientes','uses'=>'Admin\ClientesController@index']);
Route::get('/admin/clients/adicionar', ['as'=>'admin.clientes.adicionar','uses'=>'Admin\ClientesController@adicionar']);
Route::post('/admin/clients/salvar', ['as'=>'admin.clientes.salvar','uses'=>'Admin\ClientesController@salvar']);
Route::get('/admin/clients/salvar', ['as'=>'admin.clientes.salvar','uses'=>'Admin\ClientesController@salvar']);
Route::get('/admin/clients/editar/{id}', ['as'=>'admin.clientes.editar','uses'=>'Admin\ClientesController@editar']);
Route::put('/admin/clients/atualizar/{id}', ['as'=>'admin.clientes.atualizar','uses'=>'Admin\ClientesController@atualizar']);
Route::get('/admin/clients/deletar/{id}', ['as'=>'admin.clientes.deletar','uses'=>'Admin\ClientesController@deletar']);



/*
/*Rota de Index
/*Rota de login
*/
Route::get('/', 'SiteController@home')->name('home');
Route::post('login', 'Auth\LoginController@login')->name('login');



Auth::routes();

Route::get('/home', 'SiteController@home')->name('home');



