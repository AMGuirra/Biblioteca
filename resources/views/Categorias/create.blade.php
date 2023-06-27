@extends('layout')

@section('content')
    <h1>Nova Categoria</h1>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
