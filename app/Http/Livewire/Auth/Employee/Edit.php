<?php

namespace App\Http\Livewire\Auth\Employee;

use Livewire\Component;
use App\Models\Employee;

class Edit extends Component
{
    protected $listeners = ['showEmployeeEditModal'];

    public $showEditEmployeeModal = false;
    public $selectedEmployee;

    public function render()
    {
        return view('livewire.auth.employee.edit');
    }

    public function showEmployeeEditModal($id)
    {
        $this->showEditEmployeeModal = true;
        $this->selectedEmployee = Employee::find($id);
    }

    public function deleteEmployee(Employee $employee)
    {
        $employee->delete();
        $this->showEditEmployeeModal = false;
        $this->selectedEmployee = null;
        $this->emitUp('refreshEmployee');
    }
}
