<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','product_categories','product_id','category_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function variants()
    {
        return $this->hasMany('App\Models\ProductVariant');
    }
}