<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function billingaddress()
    {
        return $this->belongsTo(BillingAddress::class);
    }

    public function shippingaddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
