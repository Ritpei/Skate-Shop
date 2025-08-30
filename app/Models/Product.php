<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id', 'name', 'slug', 'description',
        'price', 'compare_price', 'quantity', 'sku', 'barcode', 'brand',
        'model', 'specifications', 'colors', 'sizes', 'is_featured',
        'is_active', 'in_stock', 'views', 'sales_count'
    ];

    protected $casts = [
        'specifications' => 'array',
        'colors' => 'array',
        'sizes' => 'array',
        'price' => 'decimal:2',
        'compare_price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'in_stock' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}