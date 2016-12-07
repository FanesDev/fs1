@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de ordem de venda</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('ordens_venda') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="employees_id" class="col-sm-2 control-label">Colaborador:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="employees_id" value="{{ old('employees_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customers_id" class="col-sm-2 control-label">Cliente:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="customers_id" value="{{ old('customers_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_sales_order" class="col-sm-2 control-label">Data da venda:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_sales_order" value="{{ old('date_sales_order') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_payment" class="col-sm-2 control-label">Forma de pagamento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="form_payment" value="{{ old('form_payment') }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_value" class="col-sm-2 control-label">Total:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="total_value" value="{{ old('total_value') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="incoming_invoices_id" class="col-sm-2 control-label">Nota fiscal de venda:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="incoming_invoices_id" value="{{ old('incoming_invoices_id') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Estatus:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="status" value="{{ old('status') }}" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="obs" class="col-sm-2 control-label">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="obs" value="{{ old('obs') }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('ordens_venda') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

