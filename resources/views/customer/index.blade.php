@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de clientes</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('clientes/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID            </th>
                            <th> Cliente       </th>
                            <th> Tipo          </th>
                            <th> Desde         </th>
                            <th> Última Compra </th>
                            <th> &nbsp         </th>
                            <th> &nbsp         </th>
                        </tr>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->client_id }}</td>
                                <td>{{ $customer->client_type }}</td>
                                <td>{{ $customer->customer_since }}</td>
                                <td>{{ $customer->last_purchase }}</td>
                                <td>
                                    <a href="{{ url('clientes/'.$customer->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('clientes/'.$customer->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $customers->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection
