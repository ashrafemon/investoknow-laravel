<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $guarded = [];

    // Eloquent Model bind with user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Eloquent Model bind with orders item
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
