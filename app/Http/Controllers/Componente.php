<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes =[
           (Object) ['nome' =>'PW3', 'horario'=>'18:23'],
           (Object) ['nome' =>'Química', 'horario'=>'18:23']
        ];
       return view('componentes',compact('componentes'));
    }
}
