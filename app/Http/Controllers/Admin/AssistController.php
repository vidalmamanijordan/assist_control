<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assist;
use App\Models\Career;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;

class AssistController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $careers = Career::all();

        return view('admin.assists.index', compact('events', 'careers'));
    }

    public function show()
    {

    }

    public function exportPdf()
    {
        $assist = Assist::all();

        $pdf = Pdf::loadView('admin.assists.pdf', compact('assist'));
        return $pdf->stream();
    }
}
