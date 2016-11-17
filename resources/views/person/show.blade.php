@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de pessoa</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('pessoas/'.$person->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $person->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="first_name" value="{{ $person->first_name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">Sobrenome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="last_name" value="{{ $person->last_name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cpf" value="{{ $person->cpf }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rg" class="col-sm-2 control-label">RG:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rg" value="{{ $person->rg }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">Sexo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sex" value="{{ $person->sex_formated }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('pessoas') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

