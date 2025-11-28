<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'vol',
        'image_url',
        'description',
        'stock'

    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class); //speicfys the pivot table
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
        ->withTimestamps();
    }
}
