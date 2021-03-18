<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password', 
    // ];

    protected $guarded = [];

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


    // Eloquent Model bind with billing address
    public function billingaddresses(){
        return $this->hasMany(BillingAddress::class);
    }
    
    // Eloquent Model bind with shipping address
    public function shippingaddresses(){
        return $this->hasMany(ShippingAddress::class);
    }

    // Eloquent Model bind with carts item
    public function carts(){
        return $this->hasMany(Cart::class);
    }

    // Eloquent Model bind with order items
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
