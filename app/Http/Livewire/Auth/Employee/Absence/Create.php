<?php

namespace App\Http\Livewire\Auth\Employee\Absence;

use App\Models\Absence;
use Livewire\Component;
use App\Models\Employee;

class Create extends Component
{
    protected $listeners = ['showAbsenceCreateModal'];

    public $showCreateAbsenceModal = false;

    public $employee, $absence;

    protected $rules = [
        'absence.absence_date' => 'required|date',
        'absence.duration' => 'required|integer|min:1|max:12',
        'absence.description' => 'required|string|min:4|max:500',
    ];

    public function render()
    {
        return view('livewire.auth.employee.absence.create');
    }

    public function showAbsenceCreateModal($id)
    {
        $this->employee = Employee::find($id);
        $this->showCreateAbsenceModal = true;
    }

    public function storeAbsence()
    {
        $this->validate();

        $this->employee->absences()->save(new Absence([
            'absence_date' => $this->absence['absence_date'],
            'duration' => $this->absence['duration'],
            'description' => $this->absence['description'],
        ]));

        $this->reset(['employee']);
        $this->showCreateAbsenceModal = false;
        $this->emitUp('refreshEmployee');
    }
}
