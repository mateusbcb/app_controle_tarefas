@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar tarefa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tarefas.update', $tarefa->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="tarefa" class="form-label">Tarefa</label>
                          <input type="text" class="form-control" name="tarefa" id="tarefa" value="{{ $tarefa->tarefa }}">
                        </div>
                        <div class="mb-3">
                          <label for="data_conclusao_tarefa" class="form-label">Data Limite concusão</label>
                          <input type="date" class="form-control" name="data_limite_conclusao" id="data_conclusao_tarefa" value="{{ $tarefa->data_limite_conclusao }}">
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
