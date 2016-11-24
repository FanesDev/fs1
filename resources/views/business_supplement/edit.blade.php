@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de suplemento corporativo</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('suplementos_corporativos/'.$businessSupplement->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $businessSupplement->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ $businessSupplement->companies_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement_name" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement_name" value="{{ $businessSupplement->supplement_name }}" maxlength="30" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement" class="col-sm-2 control-label">Suplemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement" value="{{ $businessSupplement->supplement }}" maxlength="100" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('suplementos_corporativos') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

