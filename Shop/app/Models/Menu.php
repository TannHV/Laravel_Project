<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'stt',
        'parent_id',
        'name',
        'description',
        'slug',
        'show_hide'
    ];
}
