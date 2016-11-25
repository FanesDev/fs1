@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de produtos fornecidos</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('produtos_fornecidos/'.$suppliedProduct->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $suppliedProduct->id }}" readonly>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="suppliers_id" class="col-sm-2 control-label">Fornecedor:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="suppliers_id" value="{{ $suppliedProduct->suppliers_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="products_id" class="col-sm-2 control-label">Produto:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="products_id" value="{{ $suppliedProduct->products_id }}" readonly>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('produtos_fornecidos') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

