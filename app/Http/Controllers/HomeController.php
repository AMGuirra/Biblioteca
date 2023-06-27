<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Categoria;


class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}