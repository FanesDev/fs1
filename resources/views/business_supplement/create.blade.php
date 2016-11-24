@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de suplemento corporativo</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('suplementos_corporativos') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ old('companies_id') }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement_name" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement_name" value="{{ old('supplement_name') }}" maxlength="30" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement" class="col-sm-2 control-label">Suplemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement" value="{{ old('supplement') }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('suplementos_corporativos') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

