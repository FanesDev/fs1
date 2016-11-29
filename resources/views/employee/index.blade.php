@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de colaboradores</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('colaboradores/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID                </th>
                            <th> Pessoa            </th>
                            <th> Email Corporativo </th>
                            <th> Cargo             </th>
                            <th> &nbsp             </th>
                            <th> &nbsp             </th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->people_id }}</td>
                                <td>{{ $employee->corporate_email }}</td>
                                <td>{{ $employee->role }}</td>
                                <td>
                                    <a href="{{ url('colaboradores/'.$employee->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('colaboradores/'.$employee->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $employees->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

