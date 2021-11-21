<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function showEvents()
    {
        $events = Event::all();
        return view('dogadjaji', compact('events'));
    }


}
