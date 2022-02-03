<?php

namespace App\Http\Livewire\Auth\Statistic;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class AbsenceLeftover extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $employees = Employee::withSum('absences', 'duration')
        ->when($this->search, function($query) {
            return $query->where('code', 'like', '%' . $this->search . '%')
                ->orWhere('name', 'like', '%' . $this->search . '%');
        })->paginate(10);
        return view('livewire.auth.statistic.absence-leftover', compact('employees'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
