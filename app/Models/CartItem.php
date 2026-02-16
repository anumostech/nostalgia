<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price',
        'vat_percentage'
    ];

    // Cart item belongs to cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Cart item belongs to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
