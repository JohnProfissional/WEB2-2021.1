<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\EnderecoController;
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

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/clientes/index',[ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store',[ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/show/{id}',[ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit/{id}',[ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}',[ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}',[ClienteController::class, 'destroy'])->name('clientes.delete');
Route::get('/clientes/showendereco',[ClienteController::class, 'showendereco']);
Route::get('/clientes/showvenda',[ClienteController::class, 'showvenda']);


Route::get('/fornecedores/indexs',[FornecedorController::class, 'indexs'])->name('fornecedores.indexs');
Route::get('/fornecedores/create',[FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores/store',[FornecedorController::class, 'store'])->name('fornecedores.store');
Route::get('/fornecedores/show/{id}',[FornecedorController::class, 'show'])->name('fornecedores.show');
Route::get('/fornecedores/edit/{id}',[FornecedorController::class, 'edit'])->name('fornecedores.edit');
Route::put('/fornecedores/update/{id}',[FornecedorController::class, 'update'])->name('fornecedores.update');
Route::delete('/fornecedores/{id}',[FornecedorController::class, 'destroy'])->name('fornecedores.delete');
Route::get('/fornecedores/showentrada',[FornecedorController::class, 'showentrada']);

Route::get('/produtos/indexproduto',[ProdutoController::class, 'indexproduto'])->name('produtos.indexproduto');
Route::get('/produtos/create',[ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos/store',[ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/show/{id}',[ProdutoController::class, 'show'])->name('produtos.show');
Route::get('/produtos/edit/{id}',[ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/update/{id}',[ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}',[ProdutoController::class, 'destroy'])->name('produtos.delete');
Route::get('/produtos/showitensvenda',[ProdutoController::class, 'showitensvenda']);
Route::get('/produtos/showitensentrada',[ProdutoController::class, 'showitensentrada']);

Route::get('/entrada/indexentrada',[EntradaController::class, 'indexentrada'])->name('entrada.indexentrada');
Route::get('/entrada/create',[EntradaController::class, 'create'])->name('entrada.create');
Route::post('/entrada/store',[EntradaController::class, 'store'])->name('entrada.store');
Route::get('/entrada/show/{id}',[EntradaController::class, 'show'])->name('entrada.show');
Route::get('/entrada/edit/{id}',[EntradaController::class, 'edit'])->name('entradas.edit');
Route::put('/entrada/update/{id}',[EntradaController::class, 'update'])->name('entrada.update');
Route::delete('/entrada/{id}',[EntradaController::class, 'destroy'])->name('entradas.delete');
Route::get('/entrada/showitensentrada',[EntradaController::class, 'showitensentrada']);

Route::get('/itensentrada/indexitensentrada',[ItensentradaController::class, 'indexitensentrada'])->name('itensentrada.indexitensentrada');
Route::get('/itensentrada/create',[ItensentradaController::class, 'create'])->name('itensentrada.create');
Route::post('/itensentrada/store',[ItensentradaController::class, 'store'])->name('itensentrada.store');
Route::get('/itensentrada/show/{id}',[ItensentradaController::class, 'show'])->name('itensentrada.show');
Route::get('/itensentrada/edit/{id}',[ItensentradaController::class, 'edit'])->name('itensentrada.edit');
Route::put('/itensentrada/update/{id}',[ItensentradaController::class, 'update'])->name('itensentrada.update');
Route::delete('/itensentrada/{id}',[ItensentradaController::class, 'destroy'])->name('itensentrada.delete');

Route::get('/itensvenda/indexitensvenda',[ItensvendaController::class, 'indexitensvenda'])->name('itensvenda.indexitensvenda');
Route::get('/itensvenda/create',[ItensvendaController::class, 'create'])->name('itensvenda.create');
Route::post('/itensvenda/store',[ItensvendaController::class, 'store'])->name('itensvenda.store');
Route::get('/itensvenda/show/{id}',[ItensvendaController::class, 'show'])->name('itensvenda.show');
Route::get('/itensvenda/edit/{id}',[ItensvendaController::class, 'edit'])->name('itensvenda.edit');
Route::put('/itensvenda/update/{id}',[ItensvendaController::class, 'update'])->name('itensvenda.update');
Route::delete('/itensvenda/{id}',[ItensvendaController::class, 'destroy'])->name('itensvenda.delete');

Route::get('/venda/indexvenda',[VendaController::class, 'indexvenda'])->name('venda.indexvenda');
Route::get('/venda/create',[VendaController::class, 'create'])->name('venda.create');
Route::post('/venda/store',[VendaController::class, 'store'])->name('venda.store');
Route::get('/venda/show/{id}',[VendaController::class, 'show'])->name('venda.show');
Route::get('/venda/edit/{id}',[VendaController::class, 'edit'])->name('venda.edit');
Route::put('/venda/update/{id}',[VendaController::class, 'update'])->name('venda.update');
Route::delete('/venda/{id}',[VendaController::class, 'destroy'])->name('venda.delete');
Route::get('/venda/showitensvenda',[VendaController::class, 'showitensvenda']);

Route::get('/endereco/indexendereco',[EnderecoController::class, 'indexendereco'])->name('endereco.index');
Route::get('/endereco/create',[EnderecoController::class, 'create'])->name('endereco.create');
Route::post('/endereco/store',[EnderecoController::class, 'store'])->name('endereco.store');
Route::get('/endereco/show/{id}',[EnderecoController::class, 'show'])->name('endereco.show');
Route::get('/endereco/edit/{id}',[EnderecoController::class, 'edit'])->name('endereco.edit');
Route::put('/endereco/update/{id}',[EnderecoController::class, 'update'])->name('endereco.update');
Route::delete('/endereco/{id}',[EnderecoController::class, 'destroy'])->name('endereco.delete');





/*Route::get('/disciplina', function () {
    return view('disciplina');
});

Route::get('/aluno', function () {
    return view('aluno');
});

Route::get('/alunos', function () {
    return view('aluno', ['teste' => "teste"]);
});

Route::get('/', function (){
    $nome = "John";
    return view ('aluno', ['nome' => $nome]);
});

Route::get('/parametros', function (){
    $nome = "John";
    $idade = 22;

    return view ('aluno',
    [
        'pnome' => $nome,
        'pidade' => $idade,
        'pprofissao' => "Programador"
    ]);
});
    //parametro id opcional
Route::get('/popcional/{id}', function ($id){
    return view ('aluno', ['id' => $id]);
});

    //parametro id obrigatorio
Route::get('/pobrigatorio/{id?}', function ($id){
    return view ('aluno', ['id' => $id]);
});

    //parametro obrigatorio com um valor default
 Route::get('/pobrigatoriodefault/{id?}', function ($id = 1){
    return view ('aluno', ['id' => $id]);
});

    //parametro default null e testa na view se nulo
Route::get('/pobrigatorionull/{id?}', function ($id = null){
    return view ('aluno', ['id' => $id]);
});

    //utilização dos query params
Route::get('/teste', function (){
    //acessa os parametros vindos do navegador pelo metodo request
    $busca = request('pesquisa');

    return view ('aluno', ['pesquisa' => $busca]);
});
*/

/*Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedores', [FornecedorController::class, 'show']);*/
