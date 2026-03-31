<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    function show(){
       $cursos =[
           (Object) ['nome' =>'DS', 'horario'=>'15:23'],
           (Object) ['nome' =>'ADM', 'horario'=>'15:23']
        ];
       return view('curso',compact('cursos'));
    }
}
