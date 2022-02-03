<?php

namespace App\Http\Livewire\Auth\Employee;

use Livewire\Component;
use App\Models\Employee;

class Edit extends Component
{
    protected $listeners = ['showEmployeeEditModal'];

    public $showEditEmployeeModal = false;

    public $employee;

    protected $rules = [
        'employee.name' => 'required|string|min:2|max:200',
        'employee.address' => 'required|string|min:4|max:500',
        'employee.birth_date' => 'required|date',
        'employee.join_date' => 'required|date',
    ];

    public function render()
    {
        return view('livewire.auth.employee.edit');
    }

    public function showEmployeeEditModal($id)
    {
        $this->showEditEmployeeModal = true;
        $this->employee = Employee::find($id);
    }

    public function editEmployee()
    {
        $this->validate();

        $this->employee->save();

        $this->reset(['employee']);
        $this->showEditEmployeeModal = false;
        $this->emitUp('refreshEmployee');
    }
}
