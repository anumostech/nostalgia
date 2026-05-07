<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = [
        'shipping_first_name',
        'shipping_last_name',
        'shipping_company_name',
        'shipping_country',
        'shipping_address',
        'shipping_apartment',
        'shipping_city',
        'shipping_postcode',
        'shipping_emirate',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}