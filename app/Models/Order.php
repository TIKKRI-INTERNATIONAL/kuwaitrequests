<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(VehicleType::class, 'id', 'vehicle_types_id');
    }

    public function branch()
    {
        return $this->hasOne(Branch::class, 'id', 'branches_id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customers_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
