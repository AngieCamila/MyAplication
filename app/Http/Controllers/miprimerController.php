<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miprimerController extends Controller
{
    public function suma ($a,$b){
        return $a+$b;
    }

    public function carrera ($thing){
        return 'Mi carrera es: '. $thing;
    }
}
