@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de endereços pessoais</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('enderecos_pessoais/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID        </th>
                            <th> Pessoa    </th>
                            <th> Estado    </th>
                            <th> Cidade    </th>
                            <th> Logradouro</th>
                            <th> Bairro    </th>
                            <th> Número    </th>
                            <th> CEP       </th>
                            <th> &nbsp     </th>
                            <th> &nbsp     </th>
                        </tr>
                        @foreach($personalAddresses as $personalAddress)
                            <tr>
                                <td>{{ $personalAddress->id }}</td>
                                <td>{{ $personalAddress->people_id }}</td>
                                <td>{{ $personalAddress->state }}</td>
                                <td>{{ $personalAddress->city }}</td>
                                <td>{{ $personalAddress->logradouro }}</td>
                                <td>{{ $personalAddress->neighborhood }}</td>
                                <td>{{ $personalAddress->number }}</td>
                                <td>{{ $personalAddress->cep }}</td>
                                <td>
                                    <a href="{{ url('enderecos_pessoais/'.$personalAddress->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('enderecos_pessoais/'.$personalAddress->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $personalAddresses->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection
