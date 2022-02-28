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
    return view('welcome');
});

<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarefas', TarefaController::class);
=======
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::resource('tarefas', TarefaController::class)->middleware('verified');
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24

Route::get('/mensagem-teste', function () {
    return new MensagemTesteMail();
    // Mail::to('mateusbcb@gmail.com')->send(new MensagemTesteMail());
    // return 'E-mail enviado com sucesso!';
});