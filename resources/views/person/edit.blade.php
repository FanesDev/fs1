@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alteração de pessoa</h3>
                </div>
                <div class="panel-body">
                <!--Bloco exibe erros de validação.-->
                    @include('errors._forms')
                    <form method="POST" action="{{ url('pessoas/'.$person->id) }}" class="form-horizontal">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="number" id="id" class="form-control" name="id"  value="{{ $person->id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="first_name" value="{{ $person->first_name }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">Sobrenome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="last_name" value="{{ $person->last_name }}" maxlength="20" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cpf" value="{{ $person->cpf }}" maxlength="14" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rg" class="col-sm-2 control-label">RG:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rg" value="{{ $person->rg }}" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">Sexo:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sex" required>
                                @if ($person->sex === 'M')
                                    <option value="M" selected>{{ App\Person::SEXES['M'] }}</option>
                                    <option value="F">{{ App\Person::SEXES['F'] }}</option>
                                @elseif ($person->sex === 'F')
                                    <option value="M">{{ App\Person::SEXES['M'] }}</option>
                                    <option value="F" selected>{{ App\Person::SEXES['F'] }}</option>
                                @else
                                    <option value="" disabled selected></option>
                                    <option value="M">{{ App\Person::SEXES['M'] }}</option>
                                    <option value="F">{{ App\Person::SEXES['F'] }}</option>
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Alterar</button>
                            <a href="{{ url('pessoas') }} " class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

