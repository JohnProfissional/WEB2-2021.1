<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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
Route::get('/clientes/index',[ClienteController::class, 'index']);
Route::get('/clientes/create',[ClienteController::class, 'create']);
Route::post('/clientes/store',[ClienteController::class, 'store']);

Route::get('/fornecedor/indexs',[FornecedorController::class, 'indexs']);
Route::get('/fornecedor/create',[FornecedorController::class, 'create']);
Route::post('/fornecedor/store',[FornecedorController::class, 'store']);

Route::get('/produtos/indexproduto',[ProdutoController::class, 'indexproduto']);
Route::get('/produtos/create',[ProdutoController::class, 'create']);
Route::post('/produtos/store',[ProdutoController::class, 'store']);

Route::get('/entrada/indexentrada',[EntradaController::class, 'indexentrada']);
Route::get('/entrada/create',[EntradaController::class, 'create']);
Route::post('/entrada/store',[EntradaController::class, 'store']);

Route::get('/itensentrada/indexitensentrada',[ItensentradaController::class, 'indexitensentrada']);
Route::get('/itensentrada/create',[ItensentradaController::class, 'create']);
Route::post('/itensentrada/store',[ItensentradaController::class, 'store']);

Route::get('/itensvenda/indexitensvenda',[ItensvendaController::class, 'indexitensvenda']);
Route::get('/itensvenda/create',[ItensvendaController::class, 'create']);
Route::post('/itensvenda/store',[ItensvendaController::class, 'store']);

Route::get('/venda/indexvenda',[VendaController::class, 'indexvenda']);
Route::get('/venda/create',[VendaController::class, 'create']);
Route::post('/venda/store',[VendaController::class, 'store']);







Route::get('/disciplina', function () {
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


Route::get('/clientes', [ClienteController::class, 'show']);
Route::get('/fornecedores', [FornecedorController::class, 'show']);
