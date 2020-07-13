<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $fillable = [
        'pedido_id', 'products_id', 'status', 'valor',
    ];


    public function produto(){
        return $this->belongsTo('App\products', 'products_id', 'id');
    }
}
