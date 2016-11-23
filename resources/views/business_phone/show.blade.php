@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de telefone corporativo</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('telefones_corporativos/'.$businessPhone->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $businessPhone->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="companies_id" value="{{ $businessPhone->companies_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_operator" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_operator" value="{{ $businessPhone->phone_operator }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ddd" class="col-sm-2 control-label">DDD:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ddd" value="{{ $businessPhone->ddd }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{ $businessPhone->phone }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('telefones_corporativos') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

