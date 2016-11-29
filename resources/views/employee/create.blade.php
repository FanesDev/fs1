@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de colaborador</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('colaboradores') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="people_id" value="{{ old('people_id') }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="corporate_email" class="col-sm-2 control-label">Email corporativo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="corporate_email" value="{{ old('corporate_email') }}" maxlength="30" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role" class="col-sm-2 control-label">Cargo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="role" value="{{ old('role') }}" maxlength="30" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('colaboradores') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

