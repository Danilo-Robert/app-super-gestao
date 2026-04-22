<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){

    $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogia',
            '3' => 'Reclamações',
        ];

        return view('site.principal', ['titulo' => 'Home', 'motivo_contatos' => $motivo_contatos]);
    }
}
