<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'category',
        'image_url',
        'spec_sheet_url',
        'price',
        'is_featured',
        'specifications'
    ];
    
    protected $casts = [
        'specifications' => 'array'
    ];
}