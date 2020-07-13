<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',  'price', 'description', 'category', 'image1','image2','image3', 'user_id', 'category_id',
    ];

    public function search($filter = null){

        $resultado = $this->where(function($query) use($filter){
            if($filter)  {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })   
        ->paginate(10);
        
        return $resultado;
    }

    public function user()
    {
        return $this->belongsTo('App\User','id','user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','id','category_id');
    }

    
}
