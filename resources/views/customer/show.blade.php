@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de clientes</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('clientes/'.$customer->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $customer->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_id" class="col-sm-2 control-label">Cliente:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="client_id" value="{{ $customer->client_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_type" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="client_type" value="{{ $customer->client_type }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_since" class="col-sm-2 control-label">Cliente desde:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="client_since" value="{{ $customer->client_since }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('clientes') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

