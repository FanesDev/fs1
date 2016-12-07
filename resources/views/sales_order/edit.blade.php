@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de ordem de compra</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('ordens_compra/'.$purchaseOrder->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $purchaseOrder->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="suppliers_id" class="col-sm-2 control-label">Fornecedor:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="suppliers_id" value="{{ $purchaseOrder->suppliers_id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_purchase_order" class="col-sm-2 control-label">Data da compra:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_purchase_order" value="{{ $purchaseOrder->date_purchase_order }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery_date" class="col-sm-2 control-label">Data da entrega:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="delivery_date" value="{{ $purchaseOrder->delivery_date }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_payment" class="col-sm-2 control-label">Forma de pagamento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="form_payment" value="{{ $purchaseOrder->form_payment }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_value" class="col-sm-2 control-label">Total:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="total_value" value="{{ $purchaseOrder->total_value }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Estatus:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="status" value="{{ $purchaseOrder->status }}" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="obs" class="col-sm-2 control-label">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="obs" value="{{ $purchaseOrder->obs }}" maxlength="100" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('ordens_compra') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

