@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de ordens de compra</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('ordens_compra/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID                 </th>
                            <th> Fornecedor         </th>
                            <th> Data da compra     </th>
                            <th> Data da entrega    </th>
                            <th> Forma de pagamento </th>
                            <th> Total              </th>
                            <th> Estatus            </th>
                            <th> &nbsp              </th>
                            <th> &nbsp              </th>
                        </tr>
                        @foreach($purchaseOrders as $purchaseOrder)
                            <tr>
                                <td>{{ $purchaseOrder->id }}</td>
                                <td>{{ $purchaseOrder->suppliers_id }}</td>
                                <td>{{ $purchaseOrder->date_purchase_order }}</td>
                                <td>{{ $purchaseOrder->delivery_date }}</td>
                                <td>{{ $purchaseOrder->form_payment }}</td>
                                <td>{{ $purchaseOrder->total_value }}</td>
                                <td>{{ $purchaseOrder->status }}</td>
                                <td>
                                    <a href="{{ url('ordens_compra/'.$purchaseOrder->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('ordens_compra/'.$purchaseOrder->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $purchaseOrders->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

