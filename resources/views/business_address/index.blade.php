@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de endereços corporativos</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('enderecos_corporativos/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID        </th>
                            <th> Empresa    </th>
                            <th> Estado    </th>
                            <th> Cidade    </th>
                            <th> Logradouro</th>
                            <th> Bairro    </th>
                            <th> Número    </th>
                            <th> CEP       </th>
                            <th> &nbsp     </th>
                            <th> &nbsp     </th>
                        </tr>
                        @foreach($businessAddresses as $businessAddress)
                            <tr>
                                <td>{{ $businessAddress->id }}</td>
                                <td>{{ $businessAddress->companies_id }}</td>
                                <td>{{ $businessAddress->state }}</td>
                                <td>{{ $businessAddress->city }}</td>
                                <td>{{ $businessAddress->logradouro }}</td>
                                <td>{{ $businessAddress->neighborhood }}</td>
                                <td>{{ $businessAddress->number }}</td>
                                <td>{{ $businessAddress->cep }}</td>
                                <td>
                                    <a href="{{ url('enderecos_corporativos/'.$businessAddress->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('enderecos_corporativos/'.$businessAddress->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $businessAddresses->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection
