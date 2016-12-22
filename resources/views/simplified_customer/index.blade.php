@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de clientes simplificado</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('clientes_simplificado/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID            </th>
                            <th> Cliente       </th>
                            <th> Tipo          </th>
                            <th> Telefone      </th>
                            <th> Cliente desde </th>
                            <th> &nbsp         </th>
                            <th> &nbsp         </th>
                        </tr>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->customerable->first_name }} {{ $customer->customerable->last_name }}</td>
                                <td>{{ $customer->client_type }}</td>
@foreach($personalPhones as $personalPhone)
    @if ($customer->customerable->id === $personalPhone->person_id and $customer->client_type === App\Customer::CLIENT_TYPE[0] )
        <td>({{ $personalPhone->ddd }}) {{ $personalPhone->phone }}</td>
    @else
        <td>&Oslash;</td>
    @endif
@endforeach
                                <td>{{ $customer->customer_since->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ url('clientes_simplificado/'.$customer->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('clientes_simplificado/'.$customer->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

