@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de ordem de venda</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('ordens_venda/'.$salesOrder->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $salesOrder->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="employees_id" class="col-sm-2 control-label">Colaborador:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="employees_id" value="{{ $salesOrder->employees_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customers_id" class="col-sm-2 control-label">Cliente:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="customers_id" value="{{ $salesOrder->customers_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_sales_order" class="col-sm-2 control-label">Data da venda:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_sales_order" value="{{ $salesOrder->date_sales_order }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_payment" class="col-sm-2 control-label">Forma de pagamento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="form_payment" value="{{ $salesOrder->form_payment }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_value" class="col-sm-2 control-label">Total:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="total_value"  value="{{ $salesOrder->total_value }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Estatus:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="status" value="{{ $salesOrder->status }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="obs" class="col-sm-2 control-label">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="obs" value="{{ $salesOrder->obs }}" readonly>
                            </div>
                        </div>

                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID             </th>
                            <th> Ordem de venda </th>
                            <th> Produto        </th>
                            <th> Preço de venda </th>
                            <th> Quantidade     </th>
                        </tr>
                        @foreach($salesProducts as $salesProduct)
                            <tr>
                                <td>{{ $salesProduct->id }}</td>
                                <td>{{ $salesProduct->sales_order_id }}</td>
                                <td>{{ $salesProduct->products_id }}</td>
                                <td>{{ $salesProduct->unit_sales_price }}</td>
                                <td>{{ $salesProduct->quantity }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('ordens_venda') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

