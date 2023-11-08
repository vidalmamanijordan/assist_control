<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index()
    {
        $sedes = Sede::OrderBy('id', 'desc')->paginate(10);

        return view('admin.sedes.index', compact('sedes'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('admin.sedes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Sede::create($request->all());

        return redirect()->route('adminsedes.index')->with('message', 'La sede ha sido registrado satisfactoriamente');
    }

    public function edit(Sede $sede)
    {
        return view('admin.sedes.edit', compact('sede'));
    }

    public function update(Request $request, Sede $sede)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $sede->update($request->all());

        return redirect()->route('adminsedes.index')->with('message', 'La sede ha sido actualizado satisfactoriamente');
    }

    public function destroy(Sede $sede)
    {
        $sede->delete();

        return redirect()->route('adminsedes.index')->with('message', 'La sede ha sido eliminado satisfactoriamente');
    }
}
