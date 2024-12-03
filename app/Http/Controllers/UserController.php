<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::orderbyDesc('id')->get();

        return view('users/index', ['users' => $users]);
    }

    public function show(User $user){
        return view('users/show', ['user' => $user]);
    }

    public function create(){
        return view('users/create');
    }

    public function store(UserRequest $req){
        $req->validated();

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);

        return redirect()->route('index-user')->with('success', 'Usuário cadastrado com sucesso');
    }

    public function edit(User $user){
        return view('users/edit', ['user' => $user]);
    }

    public function update(UserRequest $req, User $user){
        $req->validated();

        $user->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);

        return redirect()->route('show-user', ['user' => $user->id])->with('success', 'Usuário atualizado com sucesso');
    }

    public function destroy(User $user){
        $user->delete();

        return redirect()->route('index-user', ['user' => $user->id])->with('success', 'Usuário excluído com sucesso');
    }
}
