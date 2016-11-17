@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de email corporativo</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors.forms')
                    <form method="POST" action="{{ url('emails_corporativos/'.$businessEmail->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $businessEmail->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ $businessEmail->companies_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $businessEmail->email }}" maxlength="50" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('emails_corporativos') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

