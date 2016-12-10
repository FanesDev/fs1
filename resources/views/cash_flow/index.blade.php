@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Fluxo de caixa</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('fluxo_caixa/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID        </th>
                            <th> Data      </th>
                            <th> Tipo      </th>
                            <th> Descrição </th>
                            <th> Valor     </th>
                            <th> &nbsp     </th>
                            <th> &nbsp     </th>
                        </tr>
                        @foreach($launches as $launch)
                            <tr>
                                <td>{{ $launch->id }}</td>
                                <td>{{ $launch->date }}</td>
                                <td>{{ $launch->type }}</td>
                                <td>{{ $launch->description }}</td>
                                <td>{{ $launch->amount }}</td>
                                <td>
                                    <a href="{{ url('fluxo_caixa/'.$launch->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('fluxo_caixa/'.$launch->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $launches->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

