<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class HomeController extends Controller
{
    public function index(){
        $servico = Servico::all();
        return view('home',compact('servico'));
        //return "passei!";
    }
}
