<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'price', 'sizes', 'published', 'discount', 'reference', 'category_id'
    ];

    // Get the product's category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Get the product's image
    public function picture() {
        return $this->hasOne(Picture::class);
    }

    // Get published products
    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

    // Get discount products
    public function scopeOnDiscount($query)
    {
        return $query->where('discount', '1');
    }
}
