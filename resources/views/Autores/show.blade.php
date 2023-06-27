@extends('layout')

@section('content')
    <h1>Detalhes do Autor</h1>

    <p><strong>ID:</strong> {{ $autor->id }}</p>
    <p><strong>Nome:</strong> {{ $autor->nome }}</p>
    <p><strong>Email:</strong> {{ $autor->email }}</p>

    <a href="{{ route('autores.index') }}" class="btn btn-primary">Voltar</a>
@endsection
