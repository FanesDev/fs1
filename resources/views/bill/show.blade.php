@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de contas 'À Pagar|À Receber'</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('contas/'.$bill->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $bill->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">Data:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date" value="{{ $bill->date }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-sm-2 control-label">Tipo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" value="{{ $bill->type }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Descrição:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" value="{{ $bill->description }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount" class="col-sm-2 control-label">Valor:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="amount" value="{{ $bill->amount }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('contas') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

