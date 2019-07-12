<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        //dd($u);
        return view('admin/user/index',compact('usuarios'));
    }

    public function create(){
        return view('admin/user/create');
    }


    // ------------------------------
    public  function store(Request $request){

        $regras = [
            'nome' => 'required|min:3|max:100',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:20'
        ];

        $mensagens = [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'Nome com no mínimo 3 caracteres',
            'nome.max' => 'Nome com no máximo 100 caracteres',
            'email.required' => 'O e-mail é requerido',
            'email.unique' => 'Esse e-mail já está cadastrado em nosso sistema, informe um outro e-mail',
            'email.email' => 'E-mail inválido',
            'password.required' => 'A senha é requerida',
            'password.min' => 'Senha com no mínimo 6 caracteres',
            'password.max' => 'Senha com no máximo 20 caracteres'
        ];

        $request->validate($regras,$mensagens);

        $usuario = new User();
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));

        $usuario->save();
        return redirect()->route('usuario.index');
    }

    public function edit($id){
        $usuario = User::find($id);
        // dd($usuario);
        if(isset($usuario)){
            return view('admin/user/edit', compact('usuario'));
        }
        return redirect()->route('usuario.index');
    }

    public function update(Request $request, $id){
        $usuario = User::find($id);
        //dd($usuario);
        if(isset($usuario)){
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->password = bcrypt($request->input('password'));
            $usuario->save();
            //dd($usuario);
        }
        return redirect()->route('usuario.index');
    }

    public function destroy($id){
        $user = User::find($id);
        if(isset($user)){
            $user->delete();
        }
        return redirect()->route('usuario.index');
    }
}
