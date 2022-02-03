<?php

namespace App\Http\Livewire\Auth;

use App\Models\Employee;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $statistics;
    public $employees;

    public function render()
    {
        $this->countStatistics();
        $this->employees = Employee::limit(3)->get();

        return view('livewire.auth.dashboard');
    }

    public function countStatistics()
    {
        $this->statistics['employees_count'] = Employee::count();
        $this->statistics['employees_with_absence_count'] = Employee::has('absences')->count();
        $this->statistics['employees_without_absence_count'] = $this->statistics['employees_count'] - $this->statistics['employees_with_absence_count'];
        $this->statistics['employees_with_absence_today_count'] = Employee::whereHas('absences', function($query){
            return $query->whereDate('absence_date', Carbon::today());
        })->count();
    }
}
