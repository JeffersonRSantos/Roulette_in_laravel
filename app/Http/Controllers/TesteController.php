<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function imprimi ($n1, $n2){
        $soma = TesteController::calcula($n1, $n2);
        return view("teste")->with(compact('soma','n1','n2'));
    }
    private function calcula ($val1, $val2){
        return $val1 + $val2;
    }
}
