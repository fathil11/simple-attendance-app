<?php

namespace App\Http\Livewire\Auth\Statistic;

use Livewire\Component;
use App\Models\Employee;

class HasAbsenceMoreThanOne extends Component
{
    public function render()
    {
        $employees = Employee::with('lastAbsence')->has('absences', '>', 1)->get();
        return view('livewire.auth.statistic.has-absence-more-than-one', compact('employees'));
    }
}
