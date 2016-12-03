@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de NF de compra</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('nfs_compra/'.$incomingInvoice->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $incomingInvoice->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="purchase_orders_id" class="col-sm-2 control-label">Nota fiscal:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="purchase_orders_id" value="{{ $incomingInvoice->purchase_orders_id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">Número:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="number" value="{{ $incomingInvoice->number }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="maturity" class="col-sm-2 control-label">Venvimento:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="maturity" value="{{ $incomingInvoice->maturity }}" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('nfs_compra') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

