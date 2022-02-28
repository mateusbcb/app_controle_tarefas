@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar tarefa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tarefas.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="tarefa" class="form-label">Tarefa</label>
                          <input type="text" class="form-control" name="tarefa" id="tarefa">
                        </div>
                        <div class="mb-3">
                          <label for="data_conclusao_tarefa" class="form-label">Data Limite concusão</label>
                          <input type="date" class="form-control" name="data_limite_conclusao" id="data_conclusao_tarefa">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
