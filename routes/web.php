<?php

use App\Http\Controllers\CarrinhoController;

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

//rotas publicas
   
Route::get('index/login/new_cadastro','ClientesController@create')->name('cadcli');
//Route::get('home','HomerControllerller@home')->name('home');

//rotas Clientes
Route::post('/savecli','ClientesController@saveCli' )->name('savacli');
Route::get('/updatecli','ClientesController@update' )->name('updatecli');


Route::get('dash','HomerControllerller@dash')->name('dash');
Route::get('','SiteController@index');
Route::get('carrinho/{id}/', 'CarrinhoController@getproduto')->name('carrinho');

//rotas admin
Route::get('admin/produtos/cadastro','ProdutoController@produtosindex' )->name('admin.produtocad');
Route::post('admin/produtos/savecad','ProdutoController@produtoscreate' )->name('admin.savacad');

Route::get('admin/produtos','ProdutoController@tableProd' )->name('admin.produtos');
Route::get('admin/tableprod','ProdutoController@componetProd' )->name('componet_1.produtos');
Route::put('admin/updateprod/{id}','ProdutoController@update')->name('componet_2.produtos');
Route::delete('admin/deleteprod/{id}','ProdutoController@destroy')->name('componet_3.produtos');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
