@extends('layout')

@section('content')
    <h1>Editar Livro</h1>

    <form action="{{ route('livros.update', $livro) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="autor_id" class="form-label">Autor</label>
            <select class="form-select" aria-label="Selecione o autor" id="autor_id" name="autor_id" required>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $autor->id == $livro->autor_id ? 'selected' : '' }}>{{ $autor->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" aria-label="Selecione a categoria" id="categoria_id" name="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $livro->categoria_id ? 'selected' : '' }}>{{ $categoria->descricao }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
