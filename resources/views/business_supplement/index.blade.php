@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de suplementos corporativos</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('suplementos_corporativos/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID          </th>
                            <th> Empresa     </th>
                            <th> Tipo        </th>
                            <th> Complemento </th>
                            <th> &nbsp       </th>
                            <th> &nbsp       </th>
                        </tr>
                        @foreach($businessSupplements as $businessSupplement)
                            <tr>
                                <td>{{ $businessSupplement->id }}</td>
                                <td>{{ $businessSupplement->companies_id }}</td>
                                <td>{{ $businessSupplement->supplement_name }}</td>
                                <td>{{ $businessSupplement->supplement }}</td>
                                <td>
                                    <a href="{{ url('suplementos_corporativos/'.$businessSupplement->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('suplementos_corporativos/'.$businessSupplement->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $businessSupplements->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

