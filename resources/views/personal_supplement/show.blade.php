@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de suplemento pessoal</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('suplementos_pessoais/'.$personalSupplement->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $personalSupplement->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="people_id" class="col-sm-2 control-label">Pessoa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="people_id" value="{{ $personalSupplement->people_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement_name" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement_name" value="{{ $personalSupplement->supplement_name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="supplement" class="col-sm-2 control-label">Suplemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="supplement" value="{{ $personalSupplement->supplement }}" readonly>
                            </div>
                        </div>
                       <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('suplementos_pessoais') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

