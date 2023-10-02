<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';
	public $timestamps = true;

    public function product()
    {
        return $this->belongsToOne('App\Models\Product');
    }
    public function variant()
    {
        return $this->belongsTo('App\Models\ProductVariant','variant_id','id');
    }
}