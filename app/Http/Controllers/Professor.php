<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores =[
           (Object) ['nome' =>'Diogo', 'telefone'=>'523'],
           (Object) ['nome' =>'Ricardo', 'telefone'=>'361']
        ];
       return view('professor',compact('professores'));
    }
}
