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
            $busquedaIdDni = Participant::where('dni', $inputSearch)->select('id')->first();
            $busquedaIdCode = Participant::where('code', $inputSearch)->select('id')->first();
            
            if ($busquedaIdDni != null) {
                $participantId = json_decode($busquedaIdDni->id, true);

                /* CareerName {start} */
                $careerId = Participant::where('id', $participantId)->select('career_id')->first();
                $requestedValueCareerId = json_decode($careerId->career_id, true);
                $career = Career::where('id', $requestedValueCareerId)->select('name')->first();
                $data = json_decode($career, true);
                $careerName = $data['name'];
                /* CareerName {end}*/

                /* SemesterName {start} */
                $semesterId = Participant::where('id', $participantId)->select('semester')->first();
                $data = json_decode($semesterId, true);
                $semesterName = $data['semester'];
                /* SemesterName {start} */

                /* GroupName {start} */
                $groupId = Participant::where('id', $participantId)->select('group')->first();
                $data = json_decode($groupId, true);
                $groupName = $data['group'];
                /* GroupName {start} */

                /* Code {start} */
                $codeId = Participant::where('id', $participantId)->select('code')->first();
                $data = json_decode($codeId, true);
                $code = $data['code'];
                /* Code {start} */

                /* Names {start} */
                $namesId = Participant::where('id', $participantId)->select('name')->first();
                $data = json_decode($namesId, true);
                $names = $data['name'];
                /* Names {start} */

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

                return redirect()->route('adminregistrations.create', $registration)->with('message', 'El usuario registró su asistencia');
            } else if ($busquedaIdCode != null) {
                $participantId = json_decode($busquedaIdCode->id, true);

                /* CareerName {start} */
                $careerId = Participant::where('id', $participantId)->select('career_id')->first();
                $requestedValueCareerId = json_decode($careerId->career_id, true);
                $career = Career::where('id', $requestedValueCareerId)->select('name')->first();
                $data = json_decode($career, true);
                $careerName = $data['name'];
                /* CareerName {end}*/

                /* SemesterName {start} */
                $semesterId = Participant::where('id', $participantId)->select('semester')->first();
                $data = json_decode($semesterId, true);
                $semesterName = $data['semester'];
                /* SemesterName {start} */

                /* GroupName {start} */
                $groupId = Participant::where('id', $participantId)->select('group')->first();
                $data = json_decode($groupId, true);
                $groupName = $data['group'];
                /* GroupName {start} */

                /* Code {start} */
                $codeId = Participant::where('id', $participantId)->select('code')->first();
                $data = json_decode($codeId, true);
                $code = $data['code'];
                /* Code {start} */

                /* Names {start} */
                $namesId = Participant::where('id', $participantId)->select('name')->first();
                $data = json_decode($namesId, true);
                $names = $data['name'];
                /* Names {start} */
                
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

                return redirect()->route('adminregistrations.create', $registration)->with('message', 'El usuario registró su asistencia');
            }
            return redirect()->route('adminregistrations.create', $registration)->with('not_found', 'Dato no encontrado en nuestros registros');
        } else {
            return redirect()->route('adminregistrations.create', $registration)->with('warning', 'Ingrese dato a buscar');
        }
    }
}
