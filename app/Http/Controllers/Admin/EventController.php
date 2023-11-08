<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::OrderBy('id', 'desc')->paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => "required"
        ]);

        Event::create($request->all());

        return redirect()->route('adminevents.index')->with('message', 'El evento ha sido registrado satisfactoriamente!');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $event->update($request->all());

        return redirect()->route('adminevents.index')->with('message', 'El registro ha sido actualizado satisfactoriamente');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('adminevents.index')->with('message', 'El Evento ha sido eliminado satisfactoriamente');
    }

    public function changeStatus(Event $event)
    {
        $event->update(['status' => ($event->status == 0) ? 1 : 0]);

        return redirect()->route('adminevents.index')->with('message', 'El estado del Evento ha sido modificado satisfactoriamente');
    }
}
