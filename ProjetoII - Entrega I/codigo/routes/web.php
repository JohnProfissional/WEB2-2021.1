<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\EnderecoClienteController;

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
    //Route::get('/show/{id}',[FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::get('/edit/{id}',[FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/update/{id}',[FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::delete('/{id}',[FornecedorController::class, 'destroy'])->name('fornecedores.delete');
});

Route::prefix('produtos')->group( function () {
    Route::get('/index',[ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/create',[ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/store',[ProdutoController::class, 'store'])->name('produtos.store');
    //Route::get('/show/{id}',[ProdutoController::class, 'show'])->name('produtos.show');
    Route::get('/edit/{id}',[ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/update/{id}',[ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('/{id}',[ProdutoController::class, 'destroy'])->name('produtos.delete');
});

Route::prefix('entradas')->group( function () {
    Route::get('/index',[EntradaController::class, 'index'])->name('entradas.index');
    Route::get('/create',[EntradaController::class, 'create'])->name('entradas.create');
    Route::post('/store',[EntradaController::class, 'store'])->name('entrada.store');
    //Route::get('/show/{id}',[EntradaController::class, 'show'])->name('entrada.show');
    Route::get('/edit/{id}',[EntradaController::class, 'edit'])->name('entradas.edit');
    Route::put('/update/{id}',[EntradaController::class, 'update'])->name('entradas.update');
    Route::delete('/{id}',[EntradaController::class, 'destroy'])->name('entradas.delete');
});

Route::prefix('itensentradas')->group( function () {
    Route::get('/index',[ItensentradaController::class, 'index'])->name('itensentradas.index');
    Route::get('/create',[ItensentradaController::class, 'create'])->name('itensentradas.create');
    Route::post('/store',[ItensentradaController::class, 'store'])->name('itensentradas.store');
    //Route::get('/show/{id}',[ItensentradaController::class, 'show'])->name('itensentradas.show');
    Route::get('/edit/{id}',[ItensentradaController::class, 'edit'])->name('itensentradas.edit');
    Route::put('/update/{id}',[ItensentradaController::class, 'update'])->name('itensentradas.update');
    Route::delete('/{id}',[ItensentradaController::class, 'destroy'])->name('itensentradas.delete');
});

Route::prefix('itensvendas')->group( function () {
    Route::get('/index',[ItensvendaController::class, 'index'])->name('itensvendas.index');
    Route::get('/create',[ItensvendaController::class, 'create'])->name('itensvendas.create');
    Route::post('/store',[ItensvendaController::class, 'store'])->name('itensvendas.store');
    //Route::get('/show/{id}',[ItensvendaController::class, 'show'])->name('itensvendas.show');
    Route::get('/edit/{id}',[ItensvendaController::class, 'edit'])->name('itensvendas.edit');
    Route::put('/update/{id}',[ItensvendaController::class, 'update'])->name('itensvendas.update');
    Route::delete('/{id}',[ItensvendaController::class, 'destroy'])->name('itensvendas.delete');
});

Route::prefix('vendas')->group( function () {
    Route::get('/index',[VendaController::class, 'index'])->name('vendas.index');
    Route::get('/create',[VendaController::class, 'create'])->name('vendas.create');
    Route::post('/store',[VendaController::class, 'store'])->name('vendas.store');
    //Route::get('/show/{id}',[VendaController::class, 'show'])->name('vendas.show');
    Route::get('/edit/{id}',[VendaController::class, 'edit'])->name('vendas.edit');
    Route::put('/update/{id}',[VendaController::class, 'update'])->name('vendas.update');
    Route::delete('/{id}',[VendaController::class, 'destroy'])->name('vendas.delete');
});

Route::prefix('enderecoclientes')->group( function () {
    Route::get('/index',[EnderecoClienteController::class, 'index'])->name('enderecoclientes.index');
    Route::get('/create',[EnderecoClienteController::class, 'create'])->name('enderecoclientes.create');
    Route::post('/store',[EnderecoClienteController::class, 'store'])->name('enderecoclientes.store');
    //Route::get('/show/{id}',[EnderecoClienteController::class, 'show'])->name('enderecoclientes.show');
    Route::get('/edit/{id}',[EnderecoClienteController::class, 'edit'])->name('enderecoclientes.edit');
    Route::put('/update/{id}',[EnderecoClienteController::class, 'update'])->name('enderecoclientes.update');
    Route::delete('/{id}',[EnderecoClienteController::class, 'destroy'])->name('enderecoclientes.delete');
});

Route::prefix('categorias')->group( function () {
    Route::get('/index',[CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/create',[CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('/store',[CategoriaController::class, 'store'])->name('categorias.store');
    //Route::get('/show/{id}',[CategoriaController::class, 'show'])->name('categorias.show');
    Route::get('/edit/{id}',[CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/update/{id}',[CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/{id}',[CategoriaController::class, 'destroy'])->name('categorias.delete');
});

Route::prefix('contatoclientes')->group( function () {
    Route::get('/index',[EnderecoClienteController::class, 'index'])->name('contatoclientes.index');
    Route::get('/create',[EnderecoClienteController::class, 'create'])->name('contatoclientes.create');
    Route::post('/store',[EnderecoClienteController::class, 'store'])->name('contatoclientes.store');
    //Route::get('/show/{id}',[EnderecoClienteController::class, 'show'])->name('contatoclientes.show');
    Route::get('/edit/{id}',[EnderecoClienteController::class, 'edit'])->name('contatoclientes.edit');
    Route::put('/update/{id}',[EnderecoClienteController::class, 'update'])->name('contatoclientes.update');
    Route::delete('/{id}',[EnderecoClienteController::class, 'destroy'])->name('contatoclientes.delete');
});

Route::prefix('contatofornecedores')->group( function () {
    Route::get('/index',[ContatoFornecedorController::class, 'index'])->name('contatofornecedores.index');
    Route::get('/create',[ContatoFornecedorController::class, 'create'])->name('contatofornecedores.create');
    Route::post('/store',[ContatoFornecedorController::class, 'store'])->name('contatofornecedores.store');
    //Route::get('/show/{id}',[ContatoFornecedorController::class, 'show'])->name('contatofornecedores.show');
    Route::get('/edit/{id}',[ContatoFornecedorController::class, 'edit'])->name('contatofornecedores.edit');
    Route::put('/update/{id}',[ContatoFornecedorController::class, 'update'])->name('contatofornecedores.update');
    Route::delete('/{id}',[ContatoFornecedorController::class, 'destroy'])->name('contatofornecedores.delete');
});

Route::prefix('devolucoes')->group( function () {
    Route::get('/index',[DevolucaoController::class, 'index'])->name('devolucoes.index');
    Route::get('/create',[DevolucaoController::class, 'create'])->name('devolucoes.create');
    Route::post('/store',[DevolucaoController::class, 'store'])->name('devolucoes.store');
    //Route::get('/show/{id}',[DevolucaoController::class, 'show'])->name('devolucoes.show');
    Route::get('/edit/{id}',[DevolucaoController::class, 'edit'])->name('devolucoes.edit');
    Route::put('/update/{id}',[DevolucaoController::class, 'update'])->name('devolucoes.update');
    Route::delete('/{id}',[DevolucaoController::class, 'destroy'])->name('devolucoes.delete');
});

Route::prefix('formadepagamentos')->group( function () {
    Route::get('/index',[FormadepagamentoController::class, 'index'])->name('formadepagamentos.index');
    Route::get('/create',[FormadepagamentoController::class, 'create'])->name('formadepagamentos.create');
    Route::post('/store',[FormadepagamentoController::class, 'store'])->name('formadepagamentos.store');
    //Route::get('/show/{id}',[FormadepagamentoController::class, 'show'])->name('formadepagamentos.show');
    Route::get('/edit/{id}',[FormadepagamentoController::class, 'edit'])->name('formadepagamentos.edit');
    Route::put('/update/{id}',[FormadepagamentoController::class, 'update'])->name('formadepagamentos.update');
    Route::delete('/{id}',[FormadepagamentoController::class, 'destroy'])->name('formadepagamentos.delete');
});

Route::prefix('marcas')->group( function () {
    Route::get('/index',[MarcaController::class, 'index'])->name('marcas.index');
    Route::get('/create',[MarcaController::class, 'create'])->name('marcas.create');
    Route::post('/store',[MarcaController::class, 'store'])->name('marcas.store');
    //Route::get('/show/{id}',[MarcaController::class, 'show'])->name('marcas.show');
    Route::get('/edit/{id}',[MarcaController::class, 'edit'])->name('marcas.edit');
    Route::put('/update/{id}',[MarcaController::class, 'update'])->name('marcas.update');
    Route::delete('/{id}',[MarcaController::class, 'destroy'])->name('marcas.delete');
});
