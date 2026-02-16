<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'price',
        'quantity',
        'vat_percentage',
        'vat_amount',
        'total'
    ];

    // Order item belongs to order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Order item belongs to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
