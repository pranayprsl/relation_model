<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function cars()
    {
        return $this->belongsToMany(Car::class,'customer_cars');
    }
}
