@extends('layout')

@section('title', 'Biblioteca')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Bem-vindo a sua biblioteca pessoal!</h1>
            <p class="lead">Este é o seu aplicativo Laravel recém-criado. Use-o como base para gestão dos seus livros.</p>
            <hr class="my-4">
            <p>Esse aplicativo serve para você armazenar seus livros</p>
            <a class="btn btn-primary btn-lg" href="{{ route('livros.index') }}" role="button">Comece a explorar lista de livros</a>
        </div>
    </div>
@endsection
