<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'brand',
        'vol',
        'image_url',
        'created_at',
        'updated_at',
        'description'
        
    ];
}
