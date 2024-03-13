<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'drivers';

    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(VehicleType::class, 'id', 'vehicle_types_id');
    }

    public function branch()
    {
        return $this->hasOne(Branch::class, 'id', 'branches_id');
    }
}
