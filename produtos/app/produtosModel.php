<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtosModel extends Model
{
    //protected $table = 'produtos_models';

    protected $fillable = [
        'nome',  'preço', 'descricao', 'imagem',
    ];

    public function search($filter = null){

        $resultado = $this->where(function($query) use($filter){
            if($filter)  {
                $query->where('nome', 'LIKE', "%{$filter}%");
            }
        })   
        ->paginate(20);
        
        return $resultado;
    }
}
