<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
        ]);

        Categoria::create([
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required',
        ]);

        $categoria = Categoria::find($id);

        $categoria->update([
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);

        if ($categoria->livros()->count() > 0) {
            return redirect()->back()->with('error', 'Não é possível excluir um categoria que possui livros.');
        }

        $categoria->delete();

        return redirect()->route('categoria.index')
            ->with('success', 'Categoria excluída com sucesso!');
    }

}