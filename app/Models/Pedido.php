<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos(){
        return $this->belongsToMany('App\Models\Item', 'pedido_produtos', 'pedido_id', 'produto_id')->withPivot('created_at');

    /*
        1 - Modelo do relacionamento NxN em relação o modelo que estamos implementando
        2 - É a tabela auxiliar que armazena os registros de relacionamento
        3 - Representa o nome da FK da tabela mapeada pelo modelo na tabela de relacionamento (Coluna pedido_id da tabela Pedido Produtos)
        4 - Representa o nome da FK da tabela mapeada pelo model utilizada no relacionamento que estamos implementando (Tabela: Produto)
    */
    }
}
