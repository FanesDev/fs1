@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de NF de entrada</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('nfs_compra/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID         </th>
                            <th> Número     </th>
                            <th> Vencimento </th>
                            <th> &nbsp      </th>
                            <th> &nbsp      </th>
                        </tr>
                        @foreach($incomingInvoices as $incomingInvoice)
                            <tr>
                                <td>{{ $incomingInvoice->id }}</td>
                                <td>{{ $incomingInvoice->number }}</td>
                                <td>{{ $incomingInvoice->maturity }}</td>
                                <td>
                                    <a href="{{ url('nfs_compra/'.$incomingInvoice->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('nfs_compra/'.$incomingInvoice->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $incomingInvoices->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

