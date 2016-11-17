@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de suplementos pessoais</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('suplementos_pessoais/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID          </th>
                            <th> Pessoa      </th>
                            <th> Tipo        </th>
                            <th> Complemento </th>
                            <th> &nbsp       </th>
                            <th> &nbsp       </th>
                        </tr>
                        @foreach($personalSupplements as $personalSupplement)
                            <tr>
                                <td>{{ $personalSupplement->id }}</td>
                                <td>{{ $personalSupplement->people_id }}</td>
                                <td>{{ $personalSupplement->supplement_name }}</td>
                                <td>{{ $personalSupplement->supplement }}</td>
                                <td>
                                    <a href="{{ url('suplementos_pessoais/'.$personalSupplement->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('suplementos_pessoais/'.$personalSupplement->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $personalSupplements->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

