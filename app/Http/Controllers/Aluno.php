<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        //criar um array de objetos contendo nome, e email;
        $alunos =[
           (Object) ['nome' =>'Gabriel', 'telefone'=>'123','email'=>'laurianoplowt@gmail.com'],
           (Object) ['nome' =>'José', 'telefone'=>'321','email'=>'joseplowt@gmail.com'],
           (Object) ['nome' =>'Giorno', 'telefone'=>'231','email'=>'giornoplowt@gmail.com']
        ];
       return view('aluno',compact('alunos'));
    }
}
