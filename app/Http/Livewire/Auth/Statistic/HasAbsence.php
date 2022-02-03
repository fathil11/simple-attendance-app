<?php

namespace App\Http\Livewire\Auth\Statistic;

use App\Models\Employee;
use Livewire\Component;

class HasAbsence extends Component
{
    public function render()
    {
        $employees = Employee::with('lastAbsence')->has('absences')->get();
        return view('livewire.auth.statistic.has-absence', compact('employees'));
    }
}
