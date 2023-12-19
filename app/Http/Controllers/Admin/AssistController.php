<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assist;
use App\Models\Career;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

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
        
        setlocale(LC_TIME, 'es_ES.UTF-8');
        $fechaHoraActual = Carbon::now();
        $fechaHoraActual->setTimezone('America/Lima');
        $fechaFormateada = strftime('%A, %e de %B de %Y', $fechaHoraActual->getTimestamp());
        $horaActual = $fechaHoraActual->format('h:i:s A');
        
        $user = auth()->user();
        $name = $user->name;
        $dni = $user->dni;

        $pdf = Pdf::loadView('admin.assists.pdf', compact('assists', 'fechaFormateada', 'horaActual', 'name', 'dni'));
        return $pdf->stream();
    }
}
