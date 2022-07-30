<?php

namespace App\Http\Controllers;

use App\Models\filme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $product;

    public function __construct(Filme $filme)
    {
        $this->filme = $filme;
    }

    public function index()
    {
        $filme = $this->filme->getFillable();

        return view('site.home', compact('filme'));
    }

    public function home(Request $request)
    {
        $filme = $this->filme->getFillable();

        return view('site.home', compact('filme','request'));
    }
}
