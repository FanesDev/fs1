@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de endereço corporativo</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('enderecos_corporativos') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ old('companies_id') }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-sm-2 control-label">Unidade Federativa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logradouro" class="col-sm-2 control-label">Logradouro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logradouro" value="{{ old('logradouro') }}" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood" class="col-sm-2 control-label">Bairro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="neighborhood" value="{{ old('neighborhood') }}" maxlength="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" value="{{ old('number') }}" maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cep" class="col-sm-2 control-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cep" value="{{ old('cep') }}" maxlength="8"
                                    pattern="^\d{8}$" title="o CEP tem 8 dígitos." placeholder="Apenas números">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complement" class="col-sm-2 control-label">Complemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="complement" value="{{ old('complement') }}" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('enderecos_corporativos') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

