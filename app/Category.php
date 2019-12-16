<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug'
    ];

    // Get the products associated with the category
    public function products() {
        return $this->hasMany(Product::class);
    }
}
