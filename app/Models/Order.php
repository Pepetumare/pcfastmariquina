<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'address',
        'commune',
        'total',
        'payment_id',
        'status',
    ];
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
