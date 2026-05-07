<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    protected $fillable = [
        'billing_first_name',
        'billing_last_name',
        'billing_email',
        'billing_phone',
        'billing_company_name',
        'billing_country',
        'billing_address',
        'billing_apartment',
        'billing_city',
        'billing_postcode',
        'billing_emirate',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}