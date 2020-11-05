<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cont extends Controller
{
    public function plant(){
        return view ('plantilla');
    }
    public function fri(){
        return view ('frida');
    }
    public function cord(){
        return view ('cordelia');
    }
    public function dig(){
        return view ('diego');
    }
    public function emi(){
        return view ('emilia');
    }
    public function mati(){
        return view ('mathias');
    }
}
