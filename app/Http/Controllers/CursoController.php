<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function inicial(){ 
        return view('curso.inicial');
    }

    function add(Request $dados) { 
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());

				//RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $cursos = new \App\Models\CursoModel();

        return view('curso.inicial', ['success'=>'Cadastrado!', 'cursos'=>$cursos::all()]);
    }
}
