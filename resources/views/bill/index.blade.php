@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Contas 'Pagar/Receber'</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('contas/create') }}" class="btn btn-success">Novo</a>
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
                        @foreach($bills as $bill)
                            <tr>
                                <td>{{ $bill->id }}</td>
                                <td>{{ $bill->date }}</td>
                                <td>{{ $bill->type }}</td>
                                <td>{{ $bill->description }}</td>
                                <td>{{ $bill->amount }}</td>
                                <td>
                                    <a href="{{ url('contas/'.$bill->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('contas/'.$bill->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $bills->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

