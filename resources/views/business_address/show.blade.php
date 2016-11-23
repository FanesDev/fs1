@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de endereço corporativo</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('enderecos_corporativos/'.$businessAddress->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $businessAddress->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="companies_id" value="{{ $businessAddress->companies_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-sm-2 control-label">Unidade Federativa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state" value="{{ $businessAddress->state }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="city" value="{{ $businessAddress->city }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logradouro" class="col-sm-2 control-label">Logradouro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logradouro" value="{{ $businessAddress->logradouro }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood" class="col-sm-2 control-label">Bairro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="neighborhood" value="{{ $businessAddress->neighborhood }}" readonly>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" value="{{ $businessAddress->number }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cep" class="col-sm-2 control-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cep" value="{{ $businessAddress->cep }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complement" class="col-sm-2 control-label">Complemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="complement" value="{{ $businessAddress->complement }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('enderecos_corporativos') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

