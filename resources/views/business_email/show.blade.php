@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de email corporativo</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('emails_corporativos/'.$businessEmail->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $businessEmail->id }}" readonly>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="companies_id" class="col-sm-2 control-label">Empresa:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="companies_id" value="{{ $businessEmail->companies_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $businessEmail->email }}" readonly>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('emails_corporativos') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

