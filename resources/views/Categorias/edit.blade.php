@extends('layout')

@section('content')
    <h1>Editar Categoria</h1>

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $categoria->descricao }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
