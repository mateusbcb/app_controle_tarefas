<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .page-break {
        page-break-after: always;
    }
    .title {
        border: 1px;
        background-color: #c2c2c2;
        text-align: center;
        width: 100%;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 25px;
        padding: 0px 20px;
    }

    table {
        width: 100%;
    }

    table th {
        text-align: left;
    }

</style>

<body>
    <div class="title">Lista de Tarefas</div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Data Limite Conclusão</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tarefas as $tarefa)    
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d-m-Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{--  Quegra de Pagina  --}}
    {{--  <div class="page-break"></div>  Tudo Depois dessa linha estara na proxima página --}}
</body>
</html>