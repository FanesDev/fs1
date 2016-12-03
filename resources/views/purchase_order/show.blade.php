@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de ordem de compra</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('ordens_compra/'.$purchaseOrder->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $purchaseOrder->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="suppliers_id" class="col-sm-2 control-label">Fornecedor:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="suppliers_id" value="{{ $purchaseOrder->suppliers_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_purchase_order" class="col-sm-2 control-label">Data da compra:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_purchase_order" value="{{ $purchaseOrder->date_purchase_order }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery_date" class="col-sm-2 control-label">Data da entrega:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="delivery_date" value="{{ $purchaseOrder->delivery_date }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_payment" class="col-sm-2 control-label">Forma de pagamento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="form_payment" value="{{ $purchaseOrder->form_payment }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_value" class="col-sm-2 control-label">Total:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="total_value"  value="{{ $purchaseOrder->total_value }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Estatus:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="status" value="{{ $purchaseOrder->status }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="obs" class="col-sm-2 control-label">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="obs" value="{{ $purchaseOrder->obs }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('ordens_compra') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

