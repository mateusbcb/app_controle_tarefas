<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use Mail;
use App\Mail\NovaTarefaMail;
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return 'estamos no index';
=======
        $user_id = auth()->user()->id;

        $tarefas = Tarefa::where('user_id', $user_id)->paginate(10);

        return view('tarefa.index', [
            'tarefas' => $tarefas,
        ]);
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('tarefa.create');
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $dados = $request->all('tarefa', 'data_limite_conclusao');
        $dados['user_id'] = auth()->user()->id;

        $tarefa = Tarefa::create($dados);
        $destinatario = auth()->user()->email;
        Mail::to($destinatario)->send(new NovaTarefaMail($tarefa));

        return redirect()->route('tarefas.show', ['tarefa'=> $tarefa->id])->with('success', 'Tarefa criada com sucesso');
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
<<<<<<< HEAD
        //
=======
        return view('tarefa.show', [
            'tarefa' => $tarefa,
        ]);
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
<<<<<<< HEAD
        //
=======
        if (!$tarefa->user_id ==  auth()->user()->id) {
            return view('acesso-negado');
        }
        
        return view('tarefa.edit', [
            'tarefa' => $tarefa,
        ]);
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
<<<<<<< HEAD
        //
=======
        if (!$tarefa->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        
        $tarefa->update($request->ALL());
        return redirect()->route('tarefas.show', $tarefa->id)->with('success', 'Tarefa atualizada com sucesso!');
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
<<<<<<< HEAD
        //
=======
        if (!$tarefa->user_id ==  auth()->user()->id) {
            return view('acesso-negado');
        }

        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluid com sucesso!');
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
    }
}
