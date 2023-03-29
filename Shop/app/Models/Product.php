<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'no',
        'name',
        'slug',
        'Categories',
        'image',
        'price',
        'size',
        'color',
        'description',
        'status',
        'show_hide'
    ];
}
