@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de endereço pessoal</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('enderecos_pessoais/'.$personalAddress->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $personalAddress->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="people_id" value="{{ $personalAddress->people_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-sm-2 control-label">Unidade Federativa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state" value="{{ $personalAddress->state }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="city" value="{{ $personalAddress->city }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logradouro" class="col-sm-2 control-label">Logradouro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logradouro" value="{{ $personalAddress->logradouro }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood" class="col-sm-2 control-label">Bairro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="neighborhood" value="{{ $personalAddress->neighborhood }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" value="{{ $personalAddress->number }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cep" class="col-sm-2 control-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cep" value="{{ $personalAddress->cep }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complement" class="col-sm-2 control-label">Complemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="complement" value="{{ $personalAddress->complement }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('enderecos_pessoais') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

