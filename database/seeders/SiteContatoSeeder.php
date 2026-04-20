<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '99 99999-9999';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão';
        $contato->save();
        */

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
