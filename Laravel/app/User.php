<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\ShippingAddress;
use App\Telephone;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'sex', 'birthdate', 'cpf', 'newsletter'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shippingAddresses() {
        return $this->hasMany(ShippingAddress::class, 'user_id');
    }

    public function telephones() {
        return $this->hasMany(Telephone::class, 'user_id');
    }


    public function produtos()
    {
        return $this->hasMany('App\products','user_id','id');
    }
   
}
