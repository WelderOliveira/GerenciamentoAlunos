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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alunos','AlunoController@alunos')->name('listaNotas');
Route::get('/aluno/cadastrarAluno', 'AlunoController@formCadastro');
Route::post('/aluno/cadastrarAluno', 'AlunoController@cadastrarAluno')->name('cadastrarAluno');
Route::get('/aluno','AlunoController@listarAlunos')->name('cadastrarNota');
Route::get('/aluno/{id}','AlunoController@adicionarNota')->name('adicionarNota');
Route::get('/aluno/{id}','AlunoController@visualizarNota')->name('visualizarNota');

