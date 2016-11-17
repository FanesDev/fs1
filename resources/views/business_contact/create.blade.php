@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de contato corporativo</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors.forms')
                    <form method="POST" action="{{ url('contatos_corporativos') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                       <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="people_id" maxlength="32" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('contatos_corporativos') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

