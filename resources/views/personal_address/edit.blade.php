@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de endereço pessoal</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('enderecos_pessoais/'.$personalAddress->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $personalAddress->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="people_id" value="{{ $personalAddress->people_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-sm-2 control-label">Estado:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state" value="{{ $personalAddress->state }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="city" value="{{ $personalAddress->city }}" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logradouro" class="col-sm-2 control-label">Logradouro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logradouro" value="{{ $personalAddress->logradouro }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="neighborhood" class="col-sm-2 control-label">Bairro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="neighborhood" value="{{ $personalAddress->neighborhood }}" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" value="{{ $personalAddress->number }}" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cep" class="col-sm-2 control-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cep" value="{{ $personalAddress->cep }}" maxlength="8"
                                    pattern="^\d{8}$" title="o CEP tem 8 dígitos." placeholder="Apenas números">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complement" class="col-sm-2 control-label">Complemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="complement" value="{{ $personalAddress->complement }}" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('enderecos_pessoais') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

