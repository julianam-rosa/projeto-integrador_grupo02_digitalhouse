<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ShippingAddress extends Model
{
    public $table = 'shipping_addresses';
    public $primaryKey = "id";
    public $timestamps = false; /* teste */
    public $guarded = [];
    public $fillable = [
        'state', 'city', 'neighborhood', 'street', 'complement', 'number', 'postalCode'
    ];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }
}


