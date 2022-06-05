<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
