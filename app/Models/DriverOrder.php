<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverOrder extends Model
{
    use HasFactory;

    protected $table = 'driver_orders';

    protected $guarded = [];

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id', 'drivers_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'orders_id');
    }
}
