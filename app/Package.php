<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
