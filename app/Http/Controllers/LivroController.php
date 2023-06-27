<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Categoria;
use Barryvdh\DomPDF\Facade\Pdf;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor', 'categoria')->paginate(10);

        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        $categorias = Categoria::all();

        return view('livros.create', compact('autores', 'categorias'));
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());

        return redirect()->route('livros.show', $livro);
    }

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro)
    {
        $autores = Autor::all();
        $categorias = Categoria::all();

        return view('livros.edit', compact('livro', 'autores', 'categorias'));
    }

    public function update(Request $request, Livro $livro)
    {
        $livro->update($request->all());

        return redirect()->route('livros.show', $livro);
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index');
    }

    function relatorio() {
        $livros = Livro::all();
       
        //return view('relatorio', compact('livros'));
        $pdf = Pdf::loadView('relatorio', compact('livros'));
        return $pdf->download('livros.pdf');
      }

}
