<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="icon" type="image/png" href="{{ public_path('favicon.png') }}">

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
        <tr>
            <td>{{$livro->id }}</td>
            <td>{{$livro->titulo}}</td>
            <td>{{$livro->autor->nome}}</td>
            <td>{{$livro->categoria->descricao}}</td>
        </tr>
        @endforeach
    </tbody>
</table>