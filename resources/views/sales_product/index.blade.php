@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de produtos vendidos</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('produtos_vendidos/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID             </th>
                            <th> Ordem de venda </th>
                            <th> Produto        </th>
                            <th> Preço de venda </th>
                            <th> Quantidade     </th>
                            <th> &nbsp          </th>
                            <th> &nbsp          </th>
                        </tr>
                        @foreach($salesProducts as $salesProduct)
                            <tr>
                                <td>{{ $salesProduct->id }}</td>
                                <td>{{ $salesProduct->sales_order_id }}</td>
                                <td>{{ $salesProduct->products_id }}</td>
                                <td>{{ $salesProduct->unit_sales_price }}</td>
                                <td>{{ $salesProduct->quantity }}</td>
                                <td>
                                    <a href="{{ url('produtos_vendidos/'.$salesProduct->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('produtos_vendidos/'.$salesProduct->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $salesProducts->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

