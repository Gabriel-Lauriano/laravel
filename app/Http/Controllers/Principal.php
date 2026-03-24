<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }
    
    function somar(int $p1, int $p2){
        // echo "$p1 + $p2 =" . ($p1 + $p2);
        return view('somar', ['p1'=>$p1, 'p2'=>$p2]);
    }
    
    function subtrair(int $p1, int $p2){
        // echo "$p1 + $p2 =" . ($p1 + $p2);
        return view('subtrair', ['p1'=>$p1, 'p2'=>$p2]);
    }
    
    function multiplicar(int $p1, int $p2){
        // echo "$p1 + $p2 =" . ($p1 + $p2);
        return view('multiplicar', ['p1'=>$p1, 'p2'=>$p2]);
    }
    
    function dividir(int $p1, int $p2){
        // echo "$p1 + $p2 =" . ($p1 + $p2);
        return view('dividir', ['p1'=>$p1, 'p2'=>$p2]);
    }
    
    function produtos(){
        $produtos = [
            "produto1" => [
                "id"=> 1,
                "nome"=> "computador",
                "preco"=> 100
            ],
            "produto2" => [
                "id"=> 2,
                "nome"=> "teclado",
                "preco"=> 50
            ],
            "produto3" => [
                "id"=> 3,
                "nome"=> "mouse",
                "preco"=> 30
            ],
            "produto4" => [
                "id"=> 4,
                "nome"=> "monitor",
                "preco"=> 600
            ],
            "produto5" => [
                "id"=> 5,
                "nome"=> "impressora",
                "preco"=> 450
            ],
            "produto6" => [
                "id"=> 6,
                "nome"=> "scanner",
                "preco"=> 300
            ],
            "produto7" => [
                "id"=> 7,
                "nome"=> "webcam",
                "preco"=> 120
            ],
            "produto8" => [
                "id"=> 8,
                "nome"=> "headset",
                "preco"=> 200
            ],
            "produto9" => [
                "id"=> 9,
                "nome"=> "caixa de som",
                "preco"=> 180
            ],
            "produto10" => [
                "id"=> 10,
                "nome"=> "notebook",
                "preco"=> 2500
            ],
            "produto11" => [
                "id"=> 11,
                "nome"=> "tablet",
                "preco"=> 1200
            ],
            "produto12" => [
                "id"=> 12,
                "nome"=> "celular",
                "preco"=> 1500
            ],
            "produto13" => [
                "id"=> 13,
                "nome"=> "carregador",
                "preco"=> 80
            ],
            "produto14" => [
                "id"=> 14,
                "nome"=> "pen drive",
                "preco"=> 40
            ],
            "produto15" => [
                "id"=> 15,
                "nome"=> "HD externo",
                "preco"=> 350
            ],
            "produto16" => [
                "id"=> 16,
                "nome"=> "SSD",
                "preco"=> 500
            ],
            "produto17" => [
                "id"=> 17,
                "nome"=> "placa de vídeo",
                "preco"=> 2000
            ],
            "produto18" => [
                "id"=> 18,
                "nome"=> "memória RAM",
                "preco"=> 300
            ],
            "produto19" => [
                "id"=> 19,
                "nome"=> "fonte",
                "preco"=> 250
            ],
            "produto20" => [
                "id"=> 20,
                "nome"=> "gabinete",
                "preco"=> 400
            ],
            "produto21" => [
                "id"=> 21,
                "nome"=> "roteador",
                "preco"=> 220
            ],
        ];
    
        return view('compras',["produtos"=>$produtos]);
    }
}


