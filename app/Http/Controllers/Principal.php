<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view ('principal');
    }

    function contato(){
        return view ('contato');
    }
    
    
    function produtos(){
        return view ('produto');
    }
    
    function sobre(){
        return view ('sobre');
    }
}


