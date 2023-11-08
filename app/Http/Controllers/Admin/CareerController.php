<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::OrderBy('id', 'desc')->paginate(10);

        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        $faculties = Faculty::pluck('name', 'id');

        return view('admin.careers.create', compact('faculties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'faculty_id' => 'required'
        ]);

        Career::create($request->all());

        return redirect()->route('admincareers.index')->with('message', 'La carrera profesional fue registrado satisfactoriamente');
    }

    public function edit(Career $career)
    {
        $faculties = Faculty::pluck('name', 'id');

        return view('admin.careers.edit', compact('career', 'faculties'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'faculty_id' => 'required'
        ]);

        $career->update($request->all());

        return redirect()->route('admincareers.index')->with('message', 'El retgistro ha sido actualizado satisfactoriamente');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('admincareers.index')->with('message', 'El registro ha sido eliminado satisfactoriamente');
    }
}
