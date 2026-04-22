<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SobreNosController extends Controller
{
   
    public function sobreNos(){
        return view('site.sobre-nos', ['titulo' => 'Sobre Nós']);
    }
}
