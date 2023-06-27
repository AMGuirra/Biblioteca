<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::paginate(10);
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        Autor::create([
            'nome' => $request->nome,
            'email' => $request->email,
        ]);

        return redirect()->route('autores.index')
            ->with('success', 'Autor cadastrado com sucesso!');
    }

    public function show($id)
    {
        $autor = Autor::find($id);
        return view('autores.show', compact('autor'));
    }

    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $autor = Autor::find($id);

        $autor->update([
            'nome' => $request->nome,
            'email' => $request->email,
        ]);

        return redirect()->route('autores.index')
            ->with('success', 'Autor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);

        if ($autor->livros()->count() > 0) {
            return redirect()->back()->with('error', 'Não é possível excluir um autor que possui livros.');
        }

        $autor->delete();

        return redirect()->route('autores.index')
            ->with('success', 'Autor excluído com sucesso!');
    }
}
