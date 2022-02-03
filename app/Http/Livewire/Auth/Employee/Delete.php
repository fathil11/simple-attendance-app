<?php

namespace App\Http\Livewire\Auth\Employee;

use App\Models\Employee;
use Livewire\Component;

class Delete extends Component
{
    protected $listeners = ['showEmployeeDeleteModal'];

    public $showDeleteEmployeeModal = false;
    public $selectedEmployee;

    public function render()
    {
        return view('livewire.auth.employee.delete');
    }

    public function showEmployeeDeleteModal($id)
    {
        $this->showDeleteEmployeeModal = true;
        $this->selectedEmployee = Employee::find($id);
    }

    public function deleteEmployee(Employee $employee)
    {
        $employee->delete();
        $this->showDeleteEmployeeModal = false;
        $this->selectedEmployee = null;
        $this->emitUp('refreshEmployee');
    }
}
