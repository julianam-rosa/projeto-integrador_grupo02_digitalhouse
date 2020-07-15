<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'user_id', 'status',
    ];



    public function pedido_produtos()
    {
        return $this->hasMany('App\PedidoProduto')
        ->select( \DB::raw('products_id, sum(valor) as valores, count(1) as qtd' ))
        ->groupBy( 'products_id');
        
    }

    public static function consultaId($where)
    {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id) ? $pedido->id : null;
    }
}
