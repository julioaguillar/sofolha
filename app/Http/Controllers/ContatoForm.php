<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviaContatoEmail;

class ContatoForm extends Controller
{
    private $nome;
    private $email;
    private $mensagem;

    public function __construct(Request $request)
    {
        $this->nome = $request->nome;
        $this->email = $request->email;
        $this->mensagem = $request->mensagem;
    }

    public function enviaEmail()
    {
        $data = array(
            'nome' => $this->nome,
            'email' => $this->email,
            'mensagem' => $this->mensagem
        );

        Mail::to('src@sofolha.com.br')
            ->send( new EnviaContatoEmail($data) );
    }
}
