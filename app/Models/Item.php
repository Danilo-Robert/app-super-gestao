<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function produtoDetalhe(){
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor(){
        return $this->belongsTo('App\Models\Fornecedor');
    }

    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido', 'pedido_produtos', 'produto_id', 'pedido_id');

        /*
            3 - Usamos a FK  da tabela mapeada pelo model (produtos), na tabela de relacionamento (pedido_produtos)
            4 - Representa o nome da FK da tabela mapeada pelo model (pedidos) utilizado no relacionamento que estamos implementando (pedido_produtos)
        */
    }
}
