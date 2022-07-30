<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'image',
        'name',
        'brand',
        'category',
        'description',
        'anufacturingm',
        'dtbirth',
        'quantity',
        'price',
        'saleprice',
    ];

}
