<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ParticipantsExport;
use App\Http\Controllers\Controller;
use App\Imports\ParticipantsImport;
use App\Models\Career;
use App\Models\Participant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::OrderBy('id', 'desc')->paginate(10);

        return view('admin.participants.index', compact('participants'));
    }

    public function show()
    {
        
    }

    public function create()
    {
        $careers = Career::pluck('name', 'id');

        return view('admin.participants.create', compact('careers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required|unique:participants,dni',
            'code' => 'required|unique:participants,code',
            'phone' => 'required',
            'email' => 'required',
            'career_id' => 'required'
        ]);

        Participant::create($request->all());

        return redirect()->route('adminparticipants.index')->with('message', 'El participante ha sido registrado satisfactoriamente');
    }

    public function edit(Participant $participant)
    {
        $careers = Career::pluck('name', 'id');

        return view('admin.participants.edit', compact('participant', 'careers'));
    }

    public function update(Participant $participant, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'career_id' => 'required'
        ]);

        $participant->update($request->all());

        return redirect()->route('adminparticipants.index')->with('message', 'El participante ha sido actualizado satisfactoriamente');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect()->route('adminparticipants.index')->with('message', 'El participante ha sido eliminado satisfactoriamente');
    }

    public function export()
    {
        return new ParticipantsExport();
    }
    
    public function import()
    {
        return view('admin.participants.import');
    }

    public function importStore(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx'
        ]);

        $file = $request->file('file');

        Excel::import(new ParticipantsImport, $file);
        
        return redirect()->route('adminparticipants.index')->with('message', 'La importación de datos se realizó con éxito!.');
    }
}
