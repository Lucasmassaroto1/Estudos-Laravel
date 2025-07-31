<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Contato;

class contatoController extends Controller{
    public function index(){
        $contatos = [
            ['nome'=>'lucas', "telefone"=> '43284324234'],
            ['nome'=>'massaroto', "telefone"=> '78454313'],
        ];
        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req){
        dd($req);
        return "Este é o criar do contatoController";
    }
    public function editar(){
        return "Este é o editar do contatoController";
    }
}
