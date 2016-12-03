@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de produtos comprados</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('produtos_comprados/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID              </th>
                            <th> Ordem de compra </th>
                            <th> Produto         </th>
                            <th> Preço de compra </th>
                            <th> Quantidade      </th>
                            <th> &nbsp           </th>
                            <th> &nbsp           </th>
                        </tr>
                        @foreach($purchaseProducts as $purchaseProduct)
                            <tr>
                                <td>{{ $purchaseProduct->id }}</td>
                                <td>{{ $purchaseProduct->purchase_orders_id }}</td>
                                <td>{{ $purchaseProduct->products_id }}</td>
                                <td>{{ $purchaseProduct->unit_purchase_price }}</td>
                                <td>{{ $purchaseProduct->quantity }}</td>
                                <td>
                                    <a href="{{ url('produtos_comprados/'.$purchaseProduct->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('produtos_comprados/'.$purchaseProduct->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $purchaseProducts->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

