<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;


class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function  index(Request $request)
    {
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if(!$users = User::find($id))
           return redirect()->route('users.index');

           $title = 'Usuário' .$users->name;

        return view('users.show', compact('users', 'title'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if($request->image){
            $file = $request['image'];
            $path = $file->store('profile', 'public');
            $data['image'] = $path;
        }

        $this->model->create($data);

        return redirect()->route('users.index')->with('create', 'Usuário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        if(!$users = $this->model->find($id))
           return redirect()->route('users.index');

        return view('users.edit', compact('users'));   
    }

    public function update(StoreUpdateUserFormRequest $Request, $id)
    {
        if(!$users = $this->model->find($id))
           return redirect()->route('users.index');
        $data = $Request->all();

        if($Request->password)
           $data['password'] = bcrypt($Request->password);
           $users->update($data);

        return redirect()->route('users.index')->with('edit', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
      if (!$users = $this->model->find($id))
        return redirect()->route('users.index');
  
        $users->delete();
  
      return redirect()->route('users.index')->with('destroy', 'Usuário deletado com sucesso!');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
