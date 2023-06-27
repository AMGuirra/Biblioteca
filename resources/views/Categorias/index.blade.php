@extends('layout')

@section('content')
    <h1>Categorias</h1>

    <div class="mb-3">
        <a href="{{ route('categorias.create') }}" class="btn btn-success">Nova Categoria</a>
    </div>

    @if ($categorias->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td>
                        <a href="{{ route('categorias.show', $categoria) }}" class="btn btn-primary">Detalhes</a>
                        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categorias->links() }}
@else
    <p>Nenhuma categoria encontrada.</p>
@endif

@endsection
