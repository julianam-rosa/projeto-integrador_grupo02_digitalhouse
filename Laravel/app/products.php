<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'nome',  'preço', 'descricao', 'categoria', 'imagem','imagem2','imagem3',
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
}
