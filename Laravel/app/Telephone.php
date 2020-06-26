<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Telephone extends Model
{
    public $table = 'telephones';
    public $primaryKey = "id";
    public $timestamps = false; /* teste */
    public $guarded = [];
    public $fillable = [
        'tel1', 'tel2'
    ];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }
}
