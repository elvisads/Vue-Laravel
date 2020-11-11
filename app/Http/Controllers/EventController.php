<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){

        $nome = "Matheus";
        $idade = 29;
        $profissao = "Dev";

        $arr = [10,20,30,40,50];

        $nomes = ["Matheus", "Maria", "João", "Saulo"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
