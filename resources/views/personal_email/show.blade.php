@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de email pessoal</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('emails_pessoais/'.$personalEmail->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $personalEmail->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="people_id" value="{{ $personalEmail->people_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $personalEmail->email }}" readonly>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('emails_pessoais') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

