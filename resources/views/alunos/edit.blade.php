@extends('layout')
@section('content')
<br>
<div class="col-md-auto">
<form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group">
                <strong>ID: </strong>{{ $aluno->id }}
            </div>
        </div>
        <div class="form-group">
            <strong>Nome:</strong>
            <div class="control">
            <input type="text" class="input" name="nome" value="{{ $aluno->nome}}">
            </div>
        </div>
     
        <div class="form-group">
            <strong>Diciplina:</strong>
            <div class="control">
            <input type="text" class="input" name="diciplina" value="{{$aluno->diciplina}}">
            </div>
        </div>
     
        <div class="form-group">
            <strong>Data Matricula</strong>
            <div class="control">
            <?php   $data = new DateTime($aluno->data_matricula);
            $datasaida =$data->format('Y-m-d\TH:i:s');
                ?>
            <input type="datetime-local" class="input" name="data_matricula" value="{{$datasaida}}">
            </div>
        </div>
        
        <div class="form-group">
            <strong>Nota</strong>
            <div class="control">
            <input type="number" class="input" name="nota" value="{{$aluno->nota}}">
            </div>
        </div>
       
        <input type="submit" class=" btn btn-dark" id="btnGravar" value="Gravar">
        <input type="reset" class="btn btn-dark" id="tbnreset" value="Limpar">
    </form>
    <td><a href="{{route('alunos.index', $aluno->id)}}">Voltar Lista Alunos</a></td>


</div>
@endsection