<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_gateway',
        'transaction_id',
        'amount',
        'status',
        'response_json'
    ];

    protected $casts = [
        'response_json' => 'array'
    ];

    // Payment belongs to order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
