@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de produtos fornecidos</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('produtos_fornecidos/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID         </th>
                            <th> Fornecedor </th>
                            <th> Produto    </th>
                            <th> &nbsp      </th>
                            <th> &nbsp      </th>
                        </tr>
                        @foreach($suppliedProducts as $suppliedProduct)
                            <tr>
                                <td>{{ $suppliedProduct->id }}</td>
                                <td>{{ $suppliedProduct->suppliers_id }}</td>
                                <td>{{ $suppliedProduct->products_id }}</td>
                                <td>
                                    <a href="{{ url('produtos_fornecidos/'.$suppliedProduct->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('produtos_fornecidos/'.$suppliedProduct->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $suppliedProducts->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

