@extends('layout')
@section('content')
<h2>Adicionar novo Alunos</h2>

    <div class="container-fluid">
        <form id="createAluno" name="createAluno" method="POST" action="/alunos">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="lblNome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="lblDiciplina">Diciplina:</label>
                <input type="text" id="diciplina" name="diciplina">
            </div>
            <div class="from-group">
                <label for="lblData_Matricula">Data Matricula</label>
                <input type="date" id="data_matricula" name="data_matricula"> 
            </div>
            <div class="form-group">
                <label for="lblNota">Nota</label>
                <input type="number" id="nota" name="nota">
            </div>
            <br><br>
            <input type="submit" class=" btn btn-dark" id="btnGravar" value="Gravar">
            <input type="reset" class="btn btn-dark" id="tbnreset" value="Limpar">

        </form>
    </div>
@endsection 