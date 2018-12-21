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

Route::get('admin/produtos/cadastro','ProdutoController@produtosindex' )->name('admin.produtocad');
Route::post('admin/produtos/savecad','ProdutoController@produtoscreate' )->name('admin.savacad');
Route::get('admin/produtos','ProdutoController@tableProd' )->name('admin.produtos');
Route::get('admin/coponent_1','ProdutoController@componetProd' )->name('componet_1.produtos');