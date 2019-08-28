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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/paciente', 'ControladorPaciente@index')->name('paciente');
Route::get('/solicitante', 'ControladorSolicitante@index')->name('solicitante');
Route::get('/agendamento', 'ControladorAgendamento@index')->name('agendamento');
Route::get('/agendamentoDetalhado', 'ControladorAgendamentoDetalhado@index')->name('agendamentodetalhado');
Route::get('/exames', 'ControladorExames@index')->name('exames');
Route::get('/examesPrecos', 'ControladorExamesPrecos@index')->name('examesprecos');


