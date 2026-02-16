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
        'grand_total',
        'payment_status',
        'order_status',
        'payment_method',
        'transaction_id'
    ];

    // Order belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order has many order items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Order has one payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
