<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model 
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'drink_id',
        'rating',
        'comment',
    ];
    
    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
