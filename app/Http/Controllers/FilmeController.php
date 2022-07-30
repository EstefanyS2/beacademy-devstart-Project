<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeRequest;
use Illuminate\Http\Request;
use App\Models\filme;

class FilmeController extends Controller
{
    public function __construct(Filme $filmes)
    {
        $this->model = $filmes;
    }

    public function index(Request $request)
    {
        $filmes = Filme::all();
        
        return view('filmes.index', compact('filmes'));
    }

    public function show($id)
    {
        if(!$filmes = filme::find($id))
          return redirect()->route('filmes.index');

          $title = 'Filme' .$filmes->name;

          return view('filmes.show', compact('filmes', 'title'));
    }

public function create()
    {
        return view('filmes.create');
    }

    public function store(FilmeRequest $Request)
    {
        $data = $Request->all();
        if($Request->image){
            $file = $Request['image'];
            $path = $file->store('profile', 'public');
            $data['image'] = $path;
        }
        //$data['filme'] = 'string';
        /*$data['lancamento'] = '2019-01-01';
        $data['plataformas'] = "Netflix";
        $data['diretor(a)'] = "Estefany";
        $data['premio'] = "1";*/
        $this->model->create($data);

        return redirect()->route('filmes.index');
    }

    public function edit($id)
    {
        if(!$filmes = $this->model->find($id))
            return redirect()->route('filme.index');

        return view('filmes.edit', compact('filmes'));
    }

    public function update(FilmeRequest $Request, $id)
    {
        if(!$filmes = $this->model->find($id))
            return redirect()->route('filmes.index');

            $data = $Request->all();
        if($Request->password)
        $data['password'] = bcrypt($Request->password);
            $filmes->update($data);

        return redirect()->route('filmes.index');
    }

    public function destroy($id)
    {
        if(!$filmes = $this->model->find($id))
            return redirect()->route('filmes.index');

            $filmes->delete();
        return redirect()->route('filmes.index');
    }
}