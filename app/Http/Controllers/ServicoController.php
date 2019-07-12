<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{
    public function index(){
        $servico = Servico::all();
        return view('admin/servico/index',compact('servico'));
        //return "passei!";
    }
    public function create(){
        return view('admin/servico/create');
    }


    // ------------------------------
    public  function store(Request $request){

        $regras = [
            'nome' => 'required|min:3|max:100',
            'definicao' => 'required',
            'preco' => 'required'
        ];

        $mensagens = [
            'nome.required' => 'O nome é requerido',
            'definicao.required' => 'A definição é requerida',
            'nome.min' => 'Nome com no mínimo 3 caracteres',
            'nome.max' => 'Nome com no máximo 100 caracteres',
            'preco.required'=> 'Preço é requerido'
        ];

        $request->validate($regras,$mensagens);

        $servico = new Servico();
        $servico->nome = $request->input('nome');
        $servico->definicao = $request->input('definicao');
        $servico->preco = $request->input('preco');
        $path = $request->file('foto')->store('imagens','public');
        $servico->foto = $path;

        $servico->save();
        return redirect()->route('servico.index');
    }

    public function edit($id){
        $servico = Servico::find($id);
        // dd($usuario);
        if(isset($servico)){
            return view('admin/servico/edit', compact('servico'));
        }
        return redirect()->route('servico.index');
    }

    public function update(Request $request, $id){
        $servico = Servico::find($id);
        //dd($usuario);
        if(isset($servico)){
            $servico->nome = $request->input('nome');
            $servico->foto = $request->input('foto');
            $servico->definicao = $request->input('definicao');
            $servico->preco = number_format($request->input('preco'), 2, '.', ',');
            $servico->save();
            //dd($servico);
        }
        return redirect()->route('servico.index');
    }

    public function destroy($id){
        $servico = Servico::find($id);
        if(isset($servico)){
            $servico->delete();
        }
        return redirect()->route('servico.index');
    }
}
