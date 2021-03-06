@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de clientes</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('clientes/'.$customer->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $customer->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_id" class="col-sm-2 control-label">Cliente:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="client_id" value="{{ $customer->client_id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_type" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="client_type" value="{{ $customer->client_type }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customer_since" class="col-sm-2 control-label">Cliente desde:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="customer_since" value="{{ $customer->customer_since }}" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('clientes') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

