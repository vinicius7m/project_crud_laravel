@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Usuário</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->data_nasc }}</td>
                <td>{{ $pessoa->usuario }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pessoas->links() }}

@endsection