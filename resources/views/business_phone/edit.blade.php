@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de telefone corporativo</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('telefones_corporativos/'.$businessPhone->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $businessPhone->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="companies_id" value="{{ $businessPhone->companies_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_operator" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_operator" value="{{ $businessPhone->phone_operator }}" maxlength="25" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ddd" class="col-sm-2 control-label">DDD:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ddd" value="{{ $businessPhone->ddd }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{ $businessPhone->phone }}" maxlength="11" 
                                    pattern="^\d{8,9}$" title="digite apenas números." placeholder="Ex.: 988775555" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('telefones_corporativos') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

