@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de contatos corporativos</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors.forms')
                    <form method="POST" action="{{ url('contatos_corporativos/'.$businessContact->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $businessContact->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ $businessContact->companies_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="people_id" value="{{ $businessContact->people_id }}" maxlength="32" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('contatos_corporativos') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

