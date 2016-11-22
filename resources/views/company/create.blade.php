@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de empresa</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('empresas') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                       <div class="form-group">
                            <label for="company_name" class="col-sm-2 control-label">Razão social:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="company_name" maxlength="50" required>
                            </div>
					   </div>
                       <div class="form-group">
                            <label for="fantasy_name" class="col-sm-2 control-label">Nome fantasia:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fantasy_name" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cnpj" class="col-sm-2 control-label">CNPJ:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cnpj" maxlength="14" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state_registration" class="col-sm-2 control-label">Inscrição estadual:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="state_registration" maxlength="12" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('empresas') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

