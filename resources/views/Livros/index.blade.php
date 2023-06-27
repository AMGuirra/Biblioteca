@extends('layout')

@section('content')
    <h1>Livros</h1>

    <div class="mb-3">
        <a href="{{ route('livros.create') }}" class="btn btn-success">Novo Livro</a>
    </div>

    @if ($livros->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor->nome }}</td>
                        <td>{{ $livro->categoria->descricao }}</td>
                        <td>
                            <a href="{{ route('livros.show', $livro) }}" class="btn btn-primary">Detalhes</a>
                            <a href="{{ route('livros.edit', $livro) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $livros->links() }}
    @else
        <p>Nenhum livro encontrado.</p>
    @endif

@endsection
