<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assist;
use App\Models\Career;
use App\Models\Event;
use Illuminate\Http\Request;

class AssistController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $careers = Career::all();

        return view('admin.assists.index', compact('events', 'careers'));
    }
}
