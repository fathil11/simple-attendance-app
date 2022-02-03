<?php

namespace App\Http\Livewire\Auth\Employee;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['refreshEmployee' => 'render'];

    public $search;
    public $sortBy = 'id';
    public $sortAsc = true;

    public function render()
    {
        $employees = Employee::when($this->search, function($query) {
            return $query->where('code', 'like', '%' . $this->search . '%')
                ->orWhere('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%');
        })
        ->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
        ->paginate(10);

        return view('livewire.auth.employee.index', compact('employees'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if($field == $this->sortBy){
            $this->sortAsc = !$this->sortAsc;
        }

        $this->sortBy = $field;
    }

    public function showEmployeeCreateModal()
    {
        $this->emit('showEmployeeCreateModal');
    }

    public function showCreateAbsenceModal($id)
    {
        $this->emit('showAbsenceCreateModal', $id);
    }

    public function showEmployeeEditModal($id)
    {
        $this->emit('showEmployeeEditModal', $id);
    }

    public function showEmployeeDeleteModal($id)
    {
        $this->emit('showEmployeeDeleteModal', $id);
    }
}
