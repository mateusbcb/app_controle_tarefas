<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('bem-vindo');
});


Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/tarefas/exportar}', [TarefaController::class, 'exportar'])->name('tarefas.exportar')->middleware('verified');
Route::get('/tarefas/exportacao/{extensao}', [TarefaController::class, 'exportacao'])->name('tarefas.exportacao')->middleware('verified');
Route::resource('tarefas', TarefaController::class)->middleware('verified');


Route::get('/mensagem-teste', function () {
    return new MensagemTesteMail();
    // Mail::to('mateusbcb@gmail.com')->send(new MensagemTesteMail());
    // return 'E-mail enviado com sucesso!';
});