@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
            
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Exibição de NF de compra</b></h3>
                </div>
                
                <div class="panel-body">
                    <form method="POST" action="{{ url('nfs_compra/'.$incomingInvoice->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id"  value="{{ $incomingInvoice->id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="number" value="{{ $incomingInvoice->number }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="maturity" class="col-sm-2 control-label">Vencimento:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="maturity" value="{{ $incomingInvoice->maturity }}" readonly>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ url('nfs_compra') }} " class="btn btn-default">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

