@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de ordens de venda</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('ordens_venda/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID                 </th>
                            <th> Colaborador        </th>
                            <th> Cliente            </th>
                            <th> Data da venda      </th>
                            <th> Forma de pagamento </th>
                            <th> Total              </th>
                            <th> NF de compra       </th>
                            <th> Estatus            </th>
                            <th> &nbsp              </th>
                            <th> &nbsp              </th>
                        </tr>
                        @foreach($salesOrders as $salesOrder)
                            <tr>
                                <td>{{ $salesOrder->id }}</td>
                                <td>{{ $salesOrder->employees_id }}</td>
                                <td>{{ $salesOrder->customers_id }}</td>
                                <td>{{ $salesOrder->date_sales_order }}</td>
                                <td>{{ $salesOrder->form_payment }}</td>
                                <td>{{ $salesOrder->total_value }}</td>
                                <td>{{ $salesOrder->outgoing_invoices_id }}</td>
                                <td>{{ $salesOrder->status }}</td>
                                <td>
                                    <a href="{{ url('ordens_venda/'.$salesOrder->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('ordens_venda/'.$salesOrder->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $salesOrders->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

