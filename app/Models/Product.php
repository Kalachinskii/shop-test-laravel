<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;

    // связь 1 к 1
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
