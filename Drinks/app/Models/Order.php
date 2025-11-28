<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'quantity', 'comment', 'order_date'];

    protected $casts = [
        'order_date' => 'datetime',
    
    ];

    

    public function drinks()
    {
        
        return $this->belongsToMany(Drink::class)
        ->withTimestamps();
    }
    
    public function stockForDrink(Drink $drink)
{
    return $this->stocks()->where('drink_id', $drink->id)->first();
}

    public function stocks()
{
    return $this->hasMany(Stock::class);
}
}
