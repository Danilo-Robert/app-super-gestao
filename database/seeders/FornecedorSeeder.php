<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Five Athletic';
        $fornecedor->site = 'fiveathleti.com.br';
        $fornecedor->email = 'fiveathletic@futevolei.com';
        $fornecedor->uf = 'SP';
        $fornecedor->save();

        //Método create (atenção ao atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'DoJogo',
            'site' => 'dojogo.com.br',
            'email' => 'dojogo@futevolei.com',
            'uf' => 'RJ'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Hare',
            'site' => 'hare.com.br',
            'email' => 'hare@futevolei.com',
            'uf' => 'RJ'
        ]);
    }
}
