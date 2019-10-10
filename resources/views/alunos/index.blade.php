@extends('layout')
@section('content')
<h2>Listar Alunos</h2>

<form action="alunos/create">
    <div class="field">
        <div class="control">
            <button class=" btn btn-info" type="submit">Inserir novo Aluno</button>
        </div>

    </div>
</form>
<br>
<table class="table  table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Diciplina</th>
        <th>Data Matricula</th>
        <th>Nota</th>
        <th>Opções</th>
    </tr>
    @foreach ($alunos as $aluno)
    <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->diciplina}}</td>
            <td>{{$aluno->data_matricula}}</td>
            <td>{{$aluno->nota}}</td>
            <td>
            <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
            <a href="{{route('alunos.edit', $aluno->id)}}"><button type="button" class=" btn btn-warning">Editar</button></a>
            <a href="{{route('alunos.show', $aluno->id)}}"><button type="button" class="btn btn-info"> Mostrar</button></a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Remover</button>
            </form>
            </td>
            

        
    </tr>
    
        
    @endforeach
</table>
    
@endsection
