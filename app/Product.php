<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'sizes', 'published', 'discount', 'reference', 'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function picture() {
        return $this->hasOne(Picture::class);
    }

    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

    public function scopeOnDiscount($query)
    {
        return $query->where('discount', '1');
    }
}
