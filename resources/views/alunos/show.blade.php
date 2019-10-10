@extends('layout')
@section('content')
   <br>
   <div class="columns col-md-auto">
        <h2>Mostrar Aluno</h2>   
    </div> 
    <div class="columns col-md-auto">
        <div class="row">
            <div class="form-group">
                <strong>Id: </strong>{{$aluno->id}}
            </div>
        </div>
    </div>
    
    <div class="columns col-md-auto">
        <div class="row">
            <div class="from-group">
                    <strong>Nome: </strong>{{$aluno->nome}}
            </div>
        </div>
    </div>
    
    <div class="columns col-md-auto ">
        <div class="row">
            <div class="form-group">
                <strong>Diciplina: </strong>{{$aluno->diciplina}}
            </div>
        </div>
    </div>
    
    <div class="columns col-md-auto">
        <div class="row">
            <div class="from-group">
                    <?php   $data = new DateTime($aluno->data_matricula);
                    $datasaida =$data->format('Y/m/d  --  \ H:i:s'); ?>
                <strong>Data Matricula: </strong>{{$datasaida}}
            </div>
        </div>
    </div>
    <div class="coluns col-md-auto">
        <div class="row">
            <div class="from-group">
                <strong>Nota: </strong>{{$aluno->nota}}
            </div>
        </div>
    </div>

    <br>
    <td><a href="{{route('alunos.index', $aluno->id)}}"><button class="btn btn-outline-danger"> Retornar Lista Alunos</button></a></td>



@endsection