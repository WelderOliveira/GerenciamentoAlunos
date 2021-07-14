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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','AlunoController@alunos')->name('listaNotas');
Route::get('/aluno/cadastrarAluno', 'AlunoController@formCadastro');
Route::post('/aluno/cadastrarAluno', 'AlunoController@cadastrarAluno')->name('cadastrarAluno');
Route::get('/aluno','AlunoController@listarAlunos')->name('ListarAlunos');
Route::get('/nota/{id}','NotaController@index')->name('cadastrarNota');
Route::post('/nota/{id}','NotaController@adicionarNota')->name('adicionarNota');
Route::get('/notas/{id}','NotaController@visualizarNota')->name('visualizarNota');

