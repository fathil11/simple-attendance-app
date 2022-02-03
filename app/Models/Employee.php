<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'birth_date' => 'date:Y-m-d',
        'join_date' => 'date:Y-m-d'
    ];

    public function absences()
    {
        return $this->hasMany(Absence::class, 'employee_code', 'code');
    }

    public function lastAbsence()
    {
        return $this->hasOne(Absence::class, 'employee_code', 'code')->latest();
    }
}
