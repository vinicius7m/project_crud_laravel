@extends('layouts.app')

@section('content')
<h1>Criar pessoa</h1>
<form action="{{route('admin.pessoas.pessoa')}}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc" class="form-control">
    </div>
    <div class="form-group">
        <label for="usuario">Usuário</label>
        <input type="number" name="usuario" id="usuario" class="form-control">
    </div>

    <div>
        <button class="btn btn-primary btn-block" type="submit">Enviar</button>
    </div>

</form>
@endsection