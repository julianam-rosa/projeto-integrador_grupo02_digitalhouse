<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'nome',  'preço', 'descricao', 'categoria', 'imagem1','imagem2','imagem3', 'user_id', 'categorias_id',
    ];

    public function search($filter = null){

        $resultado = $this->where(function($query) use($filter){
            if($filter)  {
                $query->where('nome', 'LIKE', "%{$filter}%");
            }
        })   
        ->paginate(10);
        
        return $resultado;
    }

    public function user()
    {
        return $this->belongsTo('App\User','id','user_id');
    }

}
