@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Cadastro de pessoas</b></h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('pessoas/create') }}" class="btn btn-success">Novo</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover table-striped">
                        <tr class="warning">
                            <th> ID        </th>
                            <th> Nome      </th>
                            <th> Sobrenome </th>
                            <th> CPF       </th>
                            <th> RG        </th>
                            <th> Sexo      </th>
                            <th> &nbsp     </th>
                            <th> &nbsp     </th>
                        </tr>
                        @foreach($people as $person)
                            <tr>
                                <td>{{ $person->id }}</td>
                                <td>{{ $person->first_name }}</td>
                                <td>{{ $person->last_name }}</td>
                                <td>{{ $person->cpf }}</td>
                                <td>{{ $person->rg }}</td>
                                <td>{{ $person->sex_formated }}</td>
                                <td>
                                    <a href="{{ url('pessoas/'.$person->id) }}" class="btn btn-primary btn-xs">Exibir</a>
                                </td>
                                <td>
                                    <a href="{{ url('pessoas/'.$person->id.'/edit') }}" class="btn btn-warning btn-xs">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Controles de paginação. -->
                <p>{!! $people->links() !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection

