<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\Endereco_ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Contato_ClienteController;
use App\Http\Controllers\Contato_FornecedorController;
use App\Http\Controllers\DevolucaoController;
use App\Http\Controllers\Forma_de_PagamentoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\PrateleiraController;
use App\Http\Controllers\UsuarioController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/clientes', [ClienteController::class, 'show']);*/

Route::get('/', function () {
    return view('layouts.main');
});


Route::prefix('clientes')->group(function () {
    Route::get('/index',[ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create',[ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store',[ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/show/{id}',[ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/edit/{id}',[ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update/{id}',[ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/{id}',[ClienteController::class, 'destroy'])->name('clientes.delete');
});

Route::prefix('fornecedores')->group( function () {
    Route::get('/index',[FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::get('/create',[FornecedorController::class, 'create'])->name('fornecedores.create');
    Route::post('/store',[FornecedorController::class, 'store'])->name('fornecedores.store');
    Route::get('/show/{id}',[FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::get('/edit/{id}',[FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/update/{id}',[FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::delete('/{id}',[FornecedorController::class, 'destroy'])->name('fornecedores.delete');
});

Route::prefix('produtos')->group( function () {
    Route::get('/index',[ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/create',[ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/store',[ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/show/{id}',[ProdutoController::class, 'show'])->name('produtos.show');
    Route::get('/edit/{id}',[ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/update/{id}',[ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/{id}',[ProdutoController::class, 'destroy'])->name('produtos.delete');
});

Route::prefix('entradas')->group( function () {
    Route::get('/index',[EntradaController::class, 'index'])->name('entradas.index');
    Route::get('/create',[EntradaController::class, 'create'])->name('entradas.create');
    Route::post('/store',[EntradaController::class, 'store'])->name('entradas.store');
    Route::get('/show/{id}',[EntradaController::class, 'show'])->name('entradas.show');
    Route::get('/edit/{id}',[EntradaController::class, 'edit'])->name('entradas.edit');
    Route::put('/update/{id}',[EntradaController::class, 'update'])->name('entradas.update');
    Route::delete('/{id}',[EntradaController::class, 'destroy'])->name('entradas.delete');
});

Route::prefix('itensentradas')->group( function () {
    Route::get('/index',[ItensentradaController::class, 'index'])->name('itensentradas.index');
    Route::get('/create',[ItensentradaController::class, 'create'])->name('itensentradas.create');
    Route::post('/store',[ItensentradaController::class, 'store'])->name('itensentradas.store');
    Route::get('/show/{id}',[ItensentradaController::class, 'show'])->name('itensentradas.show');
    Route::get('/edit/{id}',[ItensentradaController::class, 'edit'])->name('itensentradas.edit');
    Route::put('/update/{id}',[ItensentradaController::class, 'update'])->name('itensentradas.update');
    Route::delete('/{id}',[ItensentradaController::class, 'destroy'])->name('itensentradas.delete');
});

Route::prefix('itensvendas')->group( function () {
    Route::get('/index',[ItensvendaController::class, 'index'])->name('itensvendas.index');
    Route::get('/create',[ItensvendaController::class, 'create'])->name('itensvendas.create');
    Route::post('/store',[ItensvendaController::class, 'store'])->name('itensvendas.store');
    Route::get('/show/{id}',[ItensvendaController::class, 'show'])->name('itensvendas.show');
    Route::get('/edit/{id}',[ItensvendaController::class, 'edit'])->name('itensvendas.edit');
    Route::put('/update/{id}',[ItensvendaController::class, 'update'])->name('itensvendas.update');
    Route::delete('/{id}',[ItensvendaController::class, 'destroy'])->name('itensvendas.delete');
});

Route::prefix('vendas')->group( function () {
    Route::get('/index',[VendaController::class, 'index'])->name('vendas.index');
    Route::get('/create',[VendaController::class, 'create'])->name('vendas.create');
    Route::post('/store',[VendaController::class, 'store'])->name('vendas.store');
    Route::get('/show/{id}',[VendaController::class, 'show'])->name('vendas.show');
    Route::get('/edit/{id}',[VendaController::class, 'edit'])->name('vendas.edit');
    Route::put('/update/{id}',[VendaController::class, 'update'])->name('vendas.update');
    Route::delete('/{id}',[VendaController::class, 'destroy'])->name('vendas.delete');
});

Route::prefix('enderecos_clientes')->group( function () {
    Route::get('/index',[EnderecoClienteController::class, 'index'])->name('enderecosclientes.index');
    Route::get('/create',[EnderecoClienteController::class, 'create'])->name('enderecosclientes.create');
    Route::post('/store',[EnderecoClienteController::class, 'store'])->name('enderecosclientes.store');
    Route::get('/show/{id}',[EnderecoClienteController::class, 'show'])->name('enderecosclientes.show');
    Route::get('/edit/{id}',[EnderecoClienteController::class, 'edit'])->name('enderecosclientes.edit');
    Route::put('/update/{id}',[EnderecoClienteController::class, 'update'])->name('enderecosclientes.update');
    Route::delete('/{id}',[EnderecoClienteController::class, 'destroy'])->name('enderecosclientes.delete');
});

Route::prefix('categorias')->group( function () {
    Route::get('/index',[CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/create',[CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/store',[CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('/show/{id}',[CategoriaController::class, 'show'])->name('categorias.show');
    Route::get('/edit/{id}',[CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/update/{id}',[CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/{id}',[CategoriaController::class, 'destroy'])->name('categorias.delete');
});

Route::prefix('contatos_clientes')->group( function () {
    Route::get('/index',[EnderecoClienteController::class, 'index'])->name('contatosclientes.index');
    Route::get('/create',[EnderecoClienteController::class, 'create'])->name('contatosclientes.create');
    Route::post('/store',[EnderecoClienteController::class, 'store'])->name('contatosclientes.store');
    Route::get('/show/{id}',[EnderecoClienteController::class, 'show'])->name('contatosclientes.show');
    Route::get('/edit/{id}',[EnderecoClienteController::class, 'edit'])->name('contatosclientes.edit');
    Route::put('/update/{id}',[EnderecoClienteController::class, 'update'])->name('contatosclientes.update');
    Route::delete('/{id}',[EnderecoClienteController::class, 'destroy'])->name('contatosclientes.delete');
});

Route::prefix('contatos_fornecedores')->group( function () {
    Route::get('/index',[ContatoFornecedorController::class, 'index'])->name('contatosfornecedores.index');
    Route::get('/create',[ContatoFornecedorController::class, 'create'])->name('contatosfornecedores.create');
    Route::post('/store',[ContatoFornecedorController::class, 'store'])->name('contatosfornecedores.store');
    Route::get('/show/{id}',[ContatoFornecedorController::class, 'show'])->name('contatosfornecedores.show');
    Route::get('/edit/{id}',[ContatoFornecedorController::class, 'edit'])->name('contatosfornecedores.edit');
    Route::put('/update/{id}',[ContatoFornecedorController::class, 'update'])->name('contatosfornecedores.update');
    Route::delete('/{id}',[ContatoFornecedorController::class, 'destroy'])->name('contatosfornecedores.delete');
});

Route::prefix('devolucoes')->group( function () {
    Route::get('/index',[DevolucaoController::class, 'index'])->name('devolucoes.index');
    Route::get('/create',[DevolucaoController::class, 'create'])->name('devolucoes.create');
    Route::post('/store',[DevolucaoController::class, 'store'])->name('devolucoes.store');
    Route::get('/show/{id}',[DevolucaoController::class, 'show'])->name('devolucoes.show');
    Route::get('/edit/{id}',[DevolucaoController::class, 'edit'])->name('devolucoes.edit');
    Route::put('/update/{id}',[DevolucaoController::class, 'update'])->name('devolucoes.update');
    Route::delete('/{id}',[DevolucaoController::class, 'destroy'])->name('devolucoes.delete');
});

Route::prefix('formas_de_pagamentos')->group( function () {
    Route::get('/index',[FormadepagamentoController::class, 'index'])->name('formasdepagamentos.index');
    Route::get('/create',[FormadepagamentoController::class, 'create'])->name('formasdepagamentos.create');
    Route::post('/store',[FormadepagamentoController::class, 'store'])->name('formasdepagamentos.store');
    Route::get('/show/{id}',[FormadepagamentoController::class, 'show'])->name('formasdepagamentos.show');
    Route::get('/edit/{id}',[FormadepagamentoController::class, 'edit'])->name('formasdepagamentos.edit');
    Route::put('/update/{id}',[FormadepagamentoController::class, 'update'])->name('formasdepagamentos.update');
    Route::delete('/{id}',[FormadepagamentoController::class, 'destroy'])->name('formasdepagamentos.delete');
});

Route::prefix('marcas')->group( function () {
    Route::get('/index',[MarcaController::class, 'index'])->name('marcas.index');
    Route::get('/create',[MarcaController::class, 'create'])->name('marcas.create');
    Route::post('/store',[MarcaController::class, 'store'])->name('marcas.store');
    Route::get('/show/{id}',[MarcaController::class, 'show'])->name('marcas.show');
    Route::get('/edit/{id}',[MarcaController::class, 'edit'])->name('marcas.edit');
    Route::put('/update/{id}',[MarcaController::class, 'update'])->name('marcas.update');
    Route::delete('/{id}',[MarcaController::class, 'destroy'])->name('marcas.delete');
});

Route::prefix('pagamentos')->group( function () {
    Route::get('/index',[PagamentoController::class, 'index'])->name('pagamentos.index');
    Route::get('/create',[PagamentoController::class, 'create'])->name('pagamentos.create');
    Route::post('/store',[PagamentoController::class, 'store'])->name('pagamentos.store');
    Route::get('/show/{id}',[PagamentoController::class, 'show'])->name('pagamentos.show');
    Route::get('/edit/{id}',[PagamentoController::class, 'edit'])->name('pagamentos.edit');
    Route::put('/update/{id}',[PagamentoController::class, 'update'])->name('pagamentos.update');
    Route::delete('/{id}',[PagamentoController::class, 'destroy'])->name('pagamentos.delete');
});

Route::prefix('parcelas')->group( function () {
    Route::get('/index',[ParcelaController::class, 'index'])->name('parcelas.index');
    Route::get('/create',[ParcelaController::class, 'create'])->name('parcelas.create');
    Route::post('/store',[ParcelaController::class, 'store'])->name('parcelas.store');
    Route::get('/show/{id}',[ParcelaController::class, 'show'])->name('parcelas.show');
    Route::get('/edit/{id}',[ParcelaController::class, 'edit'])->name('parcelas.edit');
    Route::put('/update/{id}',[ParcelaController::class, 'update'])->name('parcelas.update');
    Route::delete('/{id}',[ParcelaController::class, 'destroy'])->name('parcelas.delete');
});

Route::prefix('prateleiras')->group( function () {
    Route::get('/index',[PrateleiraController::class, 'index'])->name('prateleiras.index');
    Route::get('/create',[PrateleiraController::class, 'create'])->name('prateleiras.create');
    Route::post('/store',[PrateleiraController::class, 'store'])->name('prateleiras.store');
    Route::get('/show/{id}',[PrateleiraController::class, 'show'])->name('prateleiras.show');
    Route::get('/edit/{id}',[PrateleiraController::class, 'edit'])->name('prateleiras.edit');
    Route::put('/update/{id}',[PrateleiraController::class, 'update'])->name('prateleiras.update');
    Route::delete('/{id}',[PrateleiraController::class, 'destroy'])->name('prateleiras.delete');
});

Route::prefix('usuarios')->group( function () {
    Route::get('/index',[UsuarioController::class, 'index'])->name('usuarios.index');
    Route::get('/create',[UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/store',[UsuarioController::class, 'store'])->name('usuarios.store');
    Route::get('/show/{id}',[UsuarioController::class, 'show'])->name('usuarios.show');
    Route::get('/edit/{id}',[UsuarioController::class, 'edit'])->name('usuarios.edit');
    Route::put('/update/{id}',[UsuarioController::class, 'update'])->name('usuarios.update');
    Route::delete('/{id}',[UsuarioController::class, 'destroy'])->name('usuarios.delete');
});
