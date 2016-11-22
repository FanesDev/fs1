@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de empresas</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('empresas/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID                </th>
                            <th> Nome Fantasia     </th>
                            <th> Razão Social      </th>
                            <th> CNPJ              </th>
                            <th> Inscrição Estadual</th>
                            <th> &nbsp             </th>
                            <th> &nbsp             </th>
                        </tr>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->fantasy_name }}</td>
                                <td>{{ $company->cnpj }}</td>
                                <td>{{ $company->state_registration }}</td>
                                <td>
                                    <a href="{{ url('empresas/'.$company->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('empresas/'.$company->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $companies->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

