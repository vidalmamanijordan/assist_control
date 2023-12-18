<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assist;
use App\Models\Career;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;

class AssistController extends Controller
{
    public $filters = [
        'event_id' => '',
        'career' => ''
    ];

    public function index()
    {
        $events = Event::all();
        $careers = Career::all();

        return view('admin.assists.index', compact('events', 'careers'));
    }

    public function show()
    {
    }

    /* public function exportPdf()
    {
        $assists = Assist::all();

        $pdf = Pdf::loadView('admin.assists.pdf', compact('assists'));
        return $pdf->stream();
    } */

    public function exportPdf()
    {
        $assists = Assist::filter($this->filters)->get();

        $pdf = Pdf::loadView('admin.assists.pdf', compact('assists'));
        return $pdf->stream();
    }
}
