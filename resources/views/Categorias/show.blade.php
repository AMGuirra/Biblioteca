@extends('layout')

@section('content')
    <h1>Detalhes da Categoria</h1>

    <p><strong>ID:</strong> {{ $categoria->id }}</p>
    <p><strong>Descrição:</strong> {{ $categoria->descricao }}</p>

    <a href="{{ route('categorias.index') }}" class="btn btn-primary">Voltar</a>
@endsection
