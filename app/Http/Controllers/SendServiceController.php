<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class SendServiceController extends Controller
{
    public function sendMail(Request $request){
        Mail::to('ktiemipetshop@gmail.com')->send(new ContatoEmail($request));
        return view('servicoAgendado');
    }
}
