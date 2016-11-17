@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de telefone pessoal</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('telefones_pessoais/'.$personalPhone->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $personalPhone->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="people_id" value="{{ $personalPhone->people_id }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_operator" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_operator" value="{{ $personalPhone->phone_operator }}" maxlength="25" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ddd" class="col-sm-2 control-label">DDD:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ddd" value="{{ $personalPhone->ddd }}" maxlength="2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{ $personalPhone->phone }}" maxlength="11" 
                                    pattern="^\d{8,9}$" title="digite apenas números." placeholder="Ex.: 988775555" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('telefones_pessoais') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

