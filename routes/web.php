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
Route::get('admin/produtos/cadastro','ProdutoController@produtosindex' )->name('admin.produtocad');
Route::post('admin/produtos/savecad','ProdutoController@produtoscreate' )->name('admin.savacad');
Route::get('index/login/new_cadastro','ClientesController@create')->name('cadcli');

Route::get('','SiteController@index');
Route::get('carrinho/{id}/', 'CarrinhoController@getproduto')->name('carrinho');

Route::post('/savecli','ClientesController@saveCli' )->name('savacli');
Route::get('/updatecli','ClientesController@update' )->name('updatecli');   
Route::get('admin/produtos','ProdutoController@tableProd' )->name('admin.produtos');
Route::get('admin/tableprod','ProdutoController@componetProd' )->name('componet_1.produtos');
Route::put('admin/updateprod/{id}','ProdutoController@updateProd' )->name('componet_2.produtos');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
