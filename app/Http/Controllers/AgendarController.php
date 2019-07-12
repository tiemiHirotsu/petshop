<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Agenda_;

class AgendarController extends Controller
{
    //

    public function index(){
        $agenda = Agenda_::all();
        return view('admin/agendamentos', compact('agenda'));
    }

    public function edit($id){
        $servico = Servico::find($id);
        return view('agendar', compact('servico'));
    }

    public function store(Request $request, $id){
        $regras = [
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email',
            'telefone' => 'required',
            'data' => 'required',
            'horario' => 'required'
        ];

        $mensagens = [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'Nome com no mínimo 3 caracteres',
            'nome.max' => 'Nome com no máximo 100 caracteres',
            'email.required' => 'O e-mail é requerido',
            'email.email' => 'O e-mail informado não é válido',
            'telefone.required' => 'O telefone é requerido',
            'data.required' => 'A data é requerida',
            'horario.required' => 'O horário é requerido'
        ];

        $request->validate($regras,$mensagens);

        $a = new Agenda_();
        $a->nome = $request->input('nome');
        $a->email = $request->input('email');
        $a->servico_nome = $request->input('servico');
        $a->telefone = $request->input('telefone');
        //$a->data = $request->input('data');
        //$a->data = date( 'Y-m-d' , $request->input('data'));
        $a->data = date("Y-m-d", strtotime($request->input('data')));
        $a->horario = $request->input('horario');

        $a->save();
        return view('servicoAgendado');
    }
}
