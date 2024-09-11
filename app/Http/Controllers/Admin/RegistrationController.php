<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assist;
use App\Models\Career;
use App\Models\Event;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $events = Event::where('status', '1')->get();

        return view('admin.registrations.index', compact('events'));
    }

    public function create($registration)
    {
        $ultimoRegistro = Assist::latest()->first();

        $eventName = Event::find($registration);

        return view('admin.registrations.create', compact('ultimoRegistro', 'registration', 'eventName'));
    }

    public function store(Request $request, $registration)
    {
        $currentDate = Carbon::now();
        $currentDate->setTimezone('America/Lima');
        $inputSearch = $request->input('search');

        if ($inputSearch) {
            // Buscar por DNI o código
            $busquedaIdDni = Participant::where('dni', $inputSearch)->select('id')->first();
            $busquedaIdCode = Participant::where('code', $inputSearch)->select('id')->first();

            if ($busquedaIdDni != null || $busquedaIdCode != null) {
                // Obtener el ID del participante
                $participantId = $busquedaIdDni != null
                    ? json_decode($busquedaIdDni->id, true)
                    : json_decode($busquedaIdCode->id, true);

                // Verificar si ya existe un registro con los mismos user_id, event_id, participant_id
                $existingAssist = Assist::where('user_id', auth()->id())
                    ->where('event_id', $registration)
                    ->where('participant_id', $participantId)
                    ->first();

                if ($existingAssist) {
                    // Si existe, enviar un mensaje de error
                    return redirect()->route('adminregistrations.create', $registration)
                        ->with('error', 'Ya se registró en este evento.');
                }

                // Si no existe, obtener los demás valores del participante
                $careerName = Participant::where('id', $participantId)->with('career')->first()->career->name;
                $semesterName = Participant::where('id', $participantId)->select('semester')->first()->semester;
                $groupName = Participant::where('id', $participantId)->select('group')->first()->group;
                $code = Participant::where('id', $participantId)->select('code')->first()->code;
                $names = Participant::where('id', $participantId)->select('name')->first()->name;

                // Crear el nuevo registro
                $registrar = new Assist();
                $registrar->user_id = auth()->id();
                $registrar->event_id = $registration;
                $registrar->participant_id = $participantId;
                $registrar->code = $code;
                $registrar->names = $names;
                $registrar->career = $careerName;
                $registrar->semester = $semesterName;
                $registrar->group = $groupName;
                $registrar->date = $currentDate;
                $registrar->save();

                return redirect()->route('adminregistrations.create', $registration)
                    ->with('message', 'El usuario registró su asistencia');
            }

            return redirect()->route('adminregistrations.create', $registration)
                ->with('not_found', 'Dato no encontrado en nuestros registros');
        }

        return redirect()->route('adminregistrations.create', $registration)
            ->with('warning', 'Ingrese dato a buscar');
    }
}
