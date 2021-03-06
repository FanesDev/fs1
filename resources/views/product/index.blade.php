@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de produtos</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('produtos/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID        </th>
                            <th> NOme      </th>
                            <th> Preço     </th>
                            <th> Descrição </th>
                            <th> &nbsp     </th>
                            <th> &nbsp     </th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->unit_price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a href="{{ url('produtos/'.$product->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('produtos/'.$product->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $products->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

