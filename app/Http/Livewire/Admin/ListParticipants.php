<?php

namespace App\Http\Livewire\Admin;

use App\Models\Participant;
use Livewire\Component;
use Livewire\WithPagination;

class ListParticipants extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $total = Participant::count();
        $participants = Participant::OrderBy('id', 'desc')
                                    ->where('name', 'LIKE', '%' . $this->search . '%')
                                    ->orWhere('dni', 'LIKE', '%' . $this->search . '%')
                                    ->orWhere('code', 'LIKE', '%' . $this->search . '%')
                                    ->paginate(100);

        return view('livewire.admin.list-participants', compact('participants', 'total'));
    }
}
