<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'id',
        'brand',
        'vol',
        'image_url',
        'created_at',
        'updated_at'
        
    ];
}
