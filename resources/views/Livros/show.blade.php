@extends('layout')

@section('content')
    <h1>Detalhes do Livro</h1>

    <p><strong>ID:</strong> {{ $livro->id }}</p>
    <p><strong>Título:</strong> {{ $livro->titulo }}</p>
    <p><strong>Autor:</strong> {{ $livro->autor->nome }}</p>
    <p><strong>Categoria:</strong> {{ $livro->categoria->descricao }}</p>

    <a href="{{ route('livros.index') }}" class="btn btn-primary">Voltar</a>
@endsection
