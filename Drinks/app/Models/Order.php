<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'quantity', 'order_date'];

    public function drinks()
    {
        return $this->belongsToMany(Drink::class);
    }
}
