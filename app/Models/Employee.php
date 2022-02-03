<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $casts = [
        'birth_date' => 'date',
        'join_date' => 'date'
    ];

    public function absences()
    {
        return $this->hasMany(Absence::class, 'employee_code', 'code');
    }
}
