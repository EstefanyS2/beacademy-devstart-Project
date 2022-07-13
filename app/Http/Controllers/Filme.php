<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    public function __construct(Filme $filme)
    {
        $this->model = $filme;
    }

    public function index()
    {
        $filmes = Filme::all();
             dd($filmes);
    }
}
