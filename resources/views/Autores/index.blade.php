@extends('layout')

@section('content')
    <h1>Autores</h1>

    <div class="mb-3">
        <a href="{{ route('autores.create') }}" class="btn btn-success">Novo Autor</a>
    </div>

    @if ($autores->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nome }}</td>
                        <td>{{ $autor->email }}</td>
                        <td>
                            <a href="{{ route('autores.show', $autor) }}" class="btn btn-primary">Detalhes</a>
                            <a href="{{ route('autores.edit', $autor) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('autores.destroy', $autor) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este autor?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $autores->links() }}
    @else
        <p>Nenhum autor encontrado.</p>
    @endif

@endsection
