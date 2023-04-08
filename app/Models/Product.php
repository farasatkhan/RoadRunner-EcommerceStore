<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'product_title',
        'product_price',
        'product_sizes',
        'product_quality',
        'product_description',
        'product_images'
    ];
}
