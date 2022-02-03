<?php

namespace App\Http\Livewire\Auth\Employee;

use App\Models\Employee;
use Livewire\Component;

class Create extends Component
{
    protected $listeners = ['showEmployeeCreateModal'];

    public $showCreateEmployeeModal = false;

    public $employee;

    protected $rules = [
        'employee.code' => 'required|string|min:2|max:10|unique:employees,code',
        'employee.name' => 'required|string|min:2|max:200',
        'employee.address' => 'required|string|min:4|max:500',
        'employee.birth_date' => 'required|date',
        'employee.join_date' => 'required|date',
    ];

    public function render()
    {
        return view('livewire.auth.employee.create');
    }

    public function showEmployeeCreateModal()
    {
        $this->showCreateEmployeeModal = true;
    }

    public function storeEmployee()
    {
        $this->validate();

        Employee::create([
            'code' => $this->employee['code'],
            'name' => $this->employee['name'],
            'address' => $this->employee['address'],
            'birth_date' => $this->employee['birth_date'],
            'join_date' => $this->employee['join_date'],
        ]);

        $this->reset(['employee']);
        $this->showCreateEmployeeModal = false;
        $this->emitUp('refreshEmployee');
    }
}
