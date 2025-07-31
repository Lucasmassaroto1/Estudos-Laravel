<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as' => 'site.home', 'uses' => 'App\Http\Controllers\site\HomeController@index']);
Route::get('/login', ['as' => 'site.login', 'uses' => 'App\Http\Controllers\site\LoginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'App\Http\Controllers\site\LoginController@entrar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'App\Http\Controllers\site\LoginController@sair']);

Route::get('/contato/{id?}', ['uses' => 'App\Http\Controllers\contatoController@index']);
Route::post('/contato', ['uses' => 'App\Http\Controllers\contatoController@criar']);
Route::put('/contato', ['uses' => 'App\Http\Controllers\contatoController@editar']);

// CRIANDO CRUD LARAVEL
Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'App\Http\Controllers\Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'App\Http\Controllers\Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'App\Http\Controllers\Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'App\Http\Controllers\Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'App\Http\Controllers\Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'App\Http\Controllers\Admin\CursoController@deletar']);
});