<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'category_id', 'name', 'reference', 'short_description', 'price', 'stock', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
