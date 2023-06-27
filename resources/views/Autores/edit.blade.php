@extends('layout')

@section('content')
    <h1>Editar Autor</h1>

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $autor->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $autor->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
