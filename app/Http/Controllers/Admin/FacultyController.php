<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Sede;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::OrderBy('id', 'desc')->paginate(10);

        return view('admin.faculties.index', compact('faculties'));
    }

    public function create()
    {
        $sedes = Sede::pluck('name', 'id');

        return view('admin.faculties.create', compact('sedes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'sede_id' => 'required'
        ]);

        Faculty::create($request->all());

        return redirect()->route('adminfaculties.index')->with('message', 'El registro ha sido creado satisfactoriamente');
    }

    public function show()
    {

    }

    public function edit(Faculty $faculty)
    {
        $sedes = Sede::pluck('name', 'id');

        return view('admin.faculties.edit', compact('faculty', 'sedes'));
    }
    
    public function update(Faculty $faculty, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'sede_id' => 'required'
        ]);

        $faculty->update($request->all());

        return redirect()->route('adminfaculties.index')->with('message', 'El registro se ha actualizado satisfactoriamente');
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()->route('adminfaculties.index')->with('message', 'Registro eliminado satisfactoriamente');
    }
}
