<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\User;

class UserController extends Controller
{
    //

    public function index(){
        $usuarios = User::all();
        return view('usuarios.index',[
            'usuarios' => $usuarios,
            'titulo' => 'Pagina de usuarios'
            ]);
    }

    public function show($id){
        $usuarios = User::findOrFail($id);
        return view('usuarios.show', [
            'usuarios' => $usuarios,
            'titulo' => 'pagina_mirar'
        ]);
    }

    public function show($id){
        $usuarios = User::findOrFail($id);
        return view('usuarios.show', [
            'usuarios' => $usuarios,
            'titulo' => 'pagina_mirar'
        ]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(){
        /**/ 
       $data = request()->validate([
           'name' => 'required',
           'email' => ['required','email','unique:users,email'],
           'password' => 'required'
       ]);
      

       User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => bcrypt($data['password']),
           'profesion_id' => '1'
       ]);
       return redirect('usuarios');
    }

    public function edit(User $user){
        return view('usuarios.edit', ['user' =>$user]);
    }

    public function update(User $user){
        $data = request()->validate([
            'name' => 'required',
              'email' => ['required','email', Rule::unique('users')->ignore($user->id)],
             'password' => ''
        ]);

        if($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
    
        $user->update($data);
        return redirect()->route('usuarios.detalle', ['usuarios' => $user]);
    }


    public function destroy(User $user){
        $user->delete();
        return redirect()->route('usuarios');

    }

}
