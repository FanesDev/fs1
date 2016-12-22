@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de produto vendidos</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('produtos_vendidos') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="sales_order_id" class="col-sm-2 control-label">Ordem de compra:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="sales_order_id" value="{{ old('sales_order_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="products_id" class="col-sm-2 control-label">Produto:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="products_id" value="{{ old('products_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit_sales_price" class="col-sm-2 control-label">Preço unitário de venda:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="unit_sales_price" value="{{ old('unit_sales_price') }}" maxlength="32" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="col-sm-2 control-label">Quantidade:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('produtos_vendidos') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

