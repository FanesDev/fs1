@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Novo cadastro de pessoa</b></h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('pessoas') }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">Sobrenome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" maxlength="14" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rg" class="col-sm-2 control-label">RG:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rg" value="{{ old('rg') }}" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">Sexo:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sex" required>
                                    @if (old('sex') === 'M')
                                        <option value="M" selected>{{ \App\Person::SEXES['M'] }}</option>
                                        <option value="F">{{ \App\Person::SEXES['F'] }}</option>
                                    @elseif (old('sex') === 'F')
                                        <option value="M">{{ \App\Person::SEXES['M'] }}</option>
                                        <option value="F" selected>{{ \App\Person::SEX['F'] }}</option>
                                    @else
                                        <option value="" disabled selected></option>
                                        <option value="M">{{ \App\Person::SEXES['M'] }}</option>
                                        <option value="F">{{ \App\Person::SEXES['F'] }}</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-user"></i>Incluir</button>
                            <a href="{{ url('pessoas') }}" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

