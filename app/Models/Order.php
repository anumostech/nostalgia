<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_number',
        'subtotal',
        'vat_total',
        'total_amount',
        'payment_status',
        'order_status',
        'payment_method',
        'transaction_id',
        'billing_address_id',
        'ship_to_different_address',
        'shipping_address_id',
        'order_notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

     public function billingAddress()
    {
        return $this->belongsTo(BillingAddress::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }
}
