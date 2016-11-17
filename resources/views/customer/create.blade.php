@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de pessoa</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('clientes') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="client_id" class="col-sm-2 control-label">Cliente:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="client_id" value="{{ old('client_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_type" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="client_type" value="{{ old('client_type') }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customer_since" class="col-sm-2 control-label">Cliente desde:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="customer_since" value="{{ old('customer_since') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_purchase" class="col-sm-2 control-label">Última compra:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="last_purchase" value="{{ old('last_purchase') }}">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('clientes') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

