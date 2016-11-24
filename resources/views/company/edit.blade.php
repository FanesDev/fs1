@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de empresa</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('empresas/'.$company->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $company->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fantasy_name" class="col-sm-2 control-label">Nome fantasia:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fantasy_name" value="{{ $company->fantasy_name }}" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="legal_name" class="col-sm-2 control-label">Razão social:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="legal_name" value="{{ $company->legal_name }}" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cnpj" class="col-sm-2 control-label">CNPJ:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cnpj" value="{{ $company->cnpj }}" maxlength="14" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state_registration" class="col-sm-2 control-label">Inscrição estadual:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state_registration" value="{{ $company->state_registration }}" maxlength="12" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('empresas') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

