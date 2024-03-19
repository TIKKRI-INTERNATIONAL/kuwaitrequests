<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $guarded = [];

    public function address()
    {
        return $this->hasOne(Address::class,'sub_id', 'id')->where('type','customer');
    }
}
