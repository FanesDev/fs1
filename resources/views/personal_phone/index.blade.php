@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de telefones pessoais</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('telefones_pessoais/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID       </th>
                            <th> Pessoa   </th>
                            <th> Tipo     </th>
                            <th> DDD      </th>
                            <th> Telefone </th>
                            <th> &nbsp    </th>
                            <th> &nbsp    </th>
                        </tr>
                        @foreach($personalPhones as $personalPhone)
                            <tr>
                                <td>{{ $personalPhone->id }}</td>
                                <td>{{ $personalPhone->person_id }}</td>
                                <td>{{ $personalPhone->phone_operator }}</td>
                                <td>{{ $personalPhone->ddd }}</td>
                                <td>{{ $personalPhone->phone }}</td>
                                <td>
                                    <a href="{{ url('telefones_pessoais/'.$personalPhone->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('telefones_pessoais/'.$personalPhone->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $personalPhones->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

