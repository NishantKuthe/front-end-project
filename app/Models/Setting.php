<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function scopeGetValue($query, $key = '')
    {
        $setting = $query->where('key',$key)->first();
        if ($setting) {
            return $setting->value;
        } else {
            return false;
        }
    }
}
