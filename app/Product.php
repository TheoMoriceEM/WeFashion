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
}
