@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de produto fornecido</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('produtos_fornecidos') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                       <div class="form-group">
                            <label for="suppliers_id" class="col-sm-2 control-label">Fornecedor:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="suppliers_id" value="{{ old('suppliers_id') }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="products_id" class="col-sm-2 control-label">Produto:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="products_id" value="{{ old('products_id') }}" maxlength="32" required>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('produtos_fornecidos') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

