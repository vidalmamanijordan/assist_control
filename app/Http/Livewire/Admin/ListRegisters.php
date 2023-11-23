<?php

namespace App\Http\Livewire\Admin;

use App\Exports\AssistExport;
use App\Models\Assist;
use Livewire\Component;
use Livewire\WithPagination;

class ListRegisters extends Component
{
    use WithPagination;

    public $events;
    public $careers;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = 10;
    public $queryString = [
        'cant',
        'direction',
        'sort'
    ];

    public $filters = [
        'event_id' => '',
        'career' => ''
    ];

    public function generateReport()
    {
        return new AssistExport($this->filters);
    }

    public function render()
    {
        /* $assits = Assist::OrderBy('id', 'desc')->paginate(10); */
        /* $assits = Assist::filter($this->filters)->paginate(10); */
        $assits = Assist::filter($this->filters)
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);

        return view('livewire.admin.list-registers', compact('assits'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
