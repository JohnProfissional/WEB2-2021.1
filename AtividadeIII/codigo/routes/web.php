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

Route::get('/', function () { return view('welcome'); });

Route::get('/clientes/index',[ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store',[ClienteController::class, 'store'])->name('clientes.store');

Route::get('/fornecedores/indexs',[FornecedorController::class, 'indexs'])->name('fornecedores.indexs');
Route::get('/fornecedores/create',[FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores/store',[FornecedorController::class, 'store'])->name('fornecedores.store');



