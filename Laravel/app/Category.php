<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public $fillable = [
        'name'
    ];

    public function products () {

        return $this->hasMany('App\products','category_id','id');
    }
    
    
}
