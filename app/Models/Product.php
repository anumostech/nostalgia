<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'price',
        'vat_percentage',
        'stock_quantity',
        'unit',
        'status',
        'is_featured',
        'is_recommend',
        'is_top_rated',
        'is_onsale'
    ];

    // Product belongs to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Product can be in many cart items
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // Product can be in many order items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
