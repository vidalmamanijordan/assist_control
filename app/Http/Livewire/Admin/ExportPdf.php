<?php

namespace App\Http\Livewire\Admin;

use App\Models\Assist;
use Livewire\Component;

class ExportPdf extends Component
{
    public $filters = [
        'event_id' => '',
        'career' => ''
    ];
    
    public function render()
    {
        $assists = Assist::filter($this->filters)->get();
        
        return view('livewire.admin.export-pdf', compact('assists'));
    }
}
